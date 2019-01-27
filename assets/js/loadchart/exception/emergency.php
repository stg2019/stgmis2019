<?php require '../chartqueries/dashboard.php'?>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        CanvasJS.addColorSet("customColorSet", [ 
            "#f6e58d",
            "#ffbe76", 
            "#ff7979", 
            "#eb4d4b", 
            "#7ed6df",
            "#22a6b3",
            "#6ab04c",
        ]);
        var chart16 = new CanvasJS.Chart("chartContainer16",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            colorSet: "customColorSet",
            exportFileName: "Top Emergency Cases - BDRRMO", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Bacolod Disaster Risk Reduction Management Office",
                fontSize: 15
            },
            subtitles:[
                {
                    text: "Top Emergency Cases <?php echo $year?>"
                }
            ],
            legend: {
                cursor: "pointer",
                itemclick: function (e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    e.chart.render();
                },
                itemmouseover: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness * 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize + 2;
                    e.chart.render();
                },
                itemmouseout: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness / 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize - 2;
                    e.chart.render();
                }
            },
            axisY: { 
                title: "Total Count", 
                includeZero: false,
            },
            axisX: {		
                interval: 1,
            },
            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: <?php echo json_encode($data_points2); ?>
                }
                    ] 
                });
                var chart17 = new CanvasJS.Chart("chartContainer17",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                animationDuration: 1000,
                colorSet: "customColorSet",
                exportFileName: "Top Emergency Cases - BDRRMO", 
                exportEnabled: true,
                toolTip: {
                shared: true  
                },
                title: { 
                text: "Bacolod Disaster Risk Reduction Management Office",
                fontSize: 15
                },
                subtitles:[
                {
                text: "Top Emergency Cases <?php echo $year?>"
                }
            ],
            legend: {
                cursor: "pointer",
                itemclick: function (e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    e.chart.render();
                },
                itemmouseover: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness * 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize + 2;
                    e.chart.render();
                },
                itemmouseout: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness / 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize - 2;
                    e.chart.render();
                }
            },
            axisY: { 
                title: "Total Count", 
                includeZero: false,
            },
            axisX: {		
                interval: 1,
            },
            data: [ 
                { 
                    type: "bar", 
                    //showInLegend: true, 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    //legendText: "<?php echo $f2['dispatched_for']?>",
                    //name: "Total Patients this year",
                    dataPoints: <?php echo json_encode($data_points2); ?>
                }
                    ] 
                });
                var chart18 = new CanvasJS.Chart("chartContainer18",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                animationDuration: 1000,
                colorSet: "customColorSet",
                exportFileName: "Top Emergency Cases - BDRRMO", 
                exportEnabled: true,
                toolTip: {
                shared: true  
                },
                title: { 
                text: "Bacolod Disaster Risk Reduction Management Office",
                fontSize: 20
                },
                subtitles:[
                {
                text: "Top Emergency Cases <?php echo $year?>"
                }
            ],
            axisY: { 
                title: "Total Count", 
                includeZero: false,
            },
            axisX: {		
                interval: 1,
            },
            data: [ 
                { 
                    type: "line", 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: <?php echo json_encode($data_points2); ?>
                }
                    ] 
                });
                var chart19 = new CanvasJS.Chart("chartContainer19",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                animationDuration: 1000,
                colorSet: "customColorSet",
                exportFileName: "Top Emergency Cases - BDRRMO", 
                exportEnabled: true,
                toolTip: {
                shared: true  
                },
                title: { 
                text: "Bacolod Disaster Risk Reduction Management Office",
                fontSize: 15
                },
                subtitles:[
                {
                text: "Top Emergency Cases <?php echo $year?>"
                }
            ],
            data: [ 
                { 
                    type: "pie", 
                    indexLabel: "{label} - {y}", 
                    dataPoints: <?php echo json_encode($data_points2); ?>
                }
                    ] 
                });
                var chart20 = new CanvasJS.Chart("chartContainer20",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                animationDuration: 1000,
                colorSet: "customColorSet",
                exportFileName: "Top Emergency Cases - BDRRMO", 
                exportEnabled: true,
                toolTip: {
                shared: true  
                },
                title: { 
                text: "Bacolod Disaster Risk Reduction Management Office",
                fontSize: 15
                },
                subtitles:[
                {
                text: "Top Emergency Cases <?php echo $year?>"
                }
            ],
            data: [ 
                { 
                    type: "doughnut", 
                    indexLabel: "{label} - {y}", 
                    dataPoints: <?php echo json_encode($data_points2); ?>
                }
                    ] 
                });

                chart16.render();
                chart17.render();
                chart18.render();
                chart19.render();
                chart20.render();


                });

</script>
