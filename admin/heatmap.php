<head>
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/ndrrmo/logo.png">
    <title>DRRMO | Bacolod City</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Raleway' rel='stylesheet' type='text/css'>
    <style>
        #map-canvas {
            height: 100%;
            margin: 0px;
            padding: 0px;
            font-family: 'Raleway', sans-serif;
            z-index:1;
        }

        #info {
            z-index:100; 
            background-color: #dff9fb; 
            position:absolute;
            top:545px;
            left:1390px;
            cursor: move;
        }
        #heatmapchart {
            z-index:100; 
            background-color: #dff9fb; 
            position:absolute;
            top:545px;
            left:1100px;
            cursor: move;
        }
        #radius-label, #opacity-label, #max-label {
            margin-top: 10px;
        }

        #radius-slider, #opacity-slider, #max-slider {
            width:220px;
            margin-top: 10px;
        }

        #radius-slider .ui-slider-handle, 
        #opacity-slider .ui-slider-handle,
        #max-slider .ui-slider-handle {
            cursor:pointer;
        }

    </style>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="../assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets/css/style.min.css" rel="stylesheet" />
    <link href="../assets/css/style-responsive.min.css" rel="stylesheet" />
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <script src="../assets/js/papaparse.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBdesR37nt3_QOaZ6JrWvsf_LfjQM5QdH4&libraries=visualization"></script>
    <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="../assets/js/jquery.canvasjs.min.js"></script>
    <?php require '../assets/js/loadchart/heatmap/dispatchyearly.php'?>
    <script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

    <script>
        var map, pointarray, heatmap;
        var csv = [];

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function handleFileSelect(evt) {
            var file = evt.target.files[0];

            Papa.parse(file, {
                header: true,
                dynamicTyping: true,
                complete: function(results) {
                    csv = [];

                    if(results.meta.fields.indexOf("weight") == -1) {
                        for(idx in results["data"]) {
                            var row = results["data"][idx];
                            csv.push(new google.maps.LatLng(row["lat"], row["lon"]))
                        }
                    } else {
                        var max = results["data"][0]["weight"];

                        for(idx in results["data"]) {
                            var row = results["data"][idx];

                            max = Math.max(max, row["weight"]);

                            csv.push({
                                location: new google.maps.LatLng(row["lat"], row["lon"]),
                                weight: row["weight"]
                            });
                        }

                        $("#max-label").html("max: "+numberWithCommas(max));
                        $("#max-slider").slider("option","max",max);
                        $("#max-slider").slider("option","value",max);
                    }

                    console.log(results);

                    loadHeatmap(csv);
                }
            });
        }

        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(10.6501297,123.024574),
                zoom: 13,
                gestureHandling: 'greedy',
                streetViewControl: false,
                mapTypeId: google.maps.MapTypeId.SATELLITE,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                    position: google.maps.ControlPosition.TOP_CENTER
                },
                zoomControl: true,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_TOP
                },
            };

            map = new google.maps.Map(document.getElementById('map-canvas'),
                                      mapOptions);

        }

        function loadHeatmap(csv) {
            var pointArray = new google.maps.MVCArray(csv);

            if(heatmap) heatmap.setMap(null);

            heatmap = new google.maps.visualization.HeatmapLayer({
                data: pointArray,
                radius: $("#radius-slider").slider("value"),
                opacity: $("#opacity-slider").slider("value")
            });
            heatmap.setMap(map);
        }

        $(document).ready(function(){
            $("#csv-file").change(handleFileSelect);

            google.maps.event.addDomListener(window, 'load', initialize);

            //            $(function() {
            //                $( "#draggable" ).draggable();
            //            });


            $( "#info" ).draggable();
            $( "#heatmapchart" ).draggable();

            $( "#radius-slider" ).slider({
                orientation: "horizontal",
                range: "min",
                min: 1,
                max: 50,
                value: 20,
                slide: function(event, ui) {
                    $("#radius-label").html("radius: " + ui.value);
                    if(heatmap == null) return;
                    heatmap.set('radius', ui.value);
                }
            });

            $( "#opacity-slider" ).slider({
                orientation: "horizontal",
                range: "min",
                min: 0,
                max: 100,
                value: 50,
                slide: function(event, ui) {
                    $("#opacity-label").html("opacity: " + ui.value/100);
                    if(heatmap == null) return;
                    heatmap.set('opacity', ui.value/100);
                }
            });

            $( "#max-slider" ).slider({
                orientation: "horizontal",
                range: "min",
                min: 0,
                max: 1,
                value: 0,
                slide: function(event, ui) {
                    $("#max-label").html("max: " + numberWithCommas(ui.value));
                    if(heatmap == null) return;
                    heatmap.set('maxIntensity', ui.value);
                }
            });

        });
    </script>
</head>
<body>
    <!-- there goes the map -->
    <div id="map-canvas"> </div>

    <!-- the draggable input and display controls -->
    <div id="info">
        <div class="map-float-table width-sm hidden-xs p-15">
            <h5 class="m-t-0"><span class="text-danger m-r-5">Emergency Cases Percentage</span> </h5>
            <div data-scrollbar="true" class="height-md">
                <table class="table table-inverse">
                    <thead>
                        <tr>
                            <th>Emergency Case</th>
                            <th>Percent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
    require '../require/dbconnection.php';
    $query1 = $conn->query("SELECT count(*) as perdispatch FROM `dispatch`") or die(mysqli_error());
    $fetch1 = $query1->fetch_array();
    $query = $conn->query("SELECT dispatched_for, count(*) as count FROM `dispatch` group by dispatched_for order by count DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        $perdispatch = ($fetch['count']/$fetch1['perdispatch']) * 100;
                        ?>     
                        <tr>
                            <td><?php echo $fetch['dispatched_for']?></td>
                            <td><span class="text-success"><?php echo number_format($perdispatch)?>%</span></td>
                        </tr>

                        <?php
    }

                        ?>
                    </tbody>
                </table>
                <h5 class="m-t-0"><span class="text-danger m-r-5"><i class="fa fa-map-marker text-danger m-r-5"></i>Load Heatmap Here!</span> </h5>
                <input type="file" id="csv-file" name="files"/>

                <div id="radius-label">radius: 20</div>
                <div id="radius-slider"></div>

                <div id="opacity-label">opacity: 0.5</div>
                <div id="opacity-slider"></div> <br>
                <div><a href="exportcsv.php">Download CSV</a></div>
            </div>
        </div>
    </div>
    <div id="heatmapchart">
        <div class="map-float-table width-sm hidden-xs p-15">
            <h5 class="m-t-0"><span class="text-danger m-r-5">Graphical Reports for Dispatch</span> </h5>
            <div data-scrollbar="true" class="height-md">
                <div id="chartContainer1" style="width: 100%; height: 300px"></div>
                <div id="chartContainer2" style="width: 100%; height: 300px"></div>
                <div id="chartContainer3" style="width: 100%; height: 300px"></div>
            </div>
        </div>
    </div>




    <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="../assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/js/map-vector.demo.min.js"></script>
    <script src="../assets/js/apps.min.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
            MapVector.init();
        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-53034621-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>    