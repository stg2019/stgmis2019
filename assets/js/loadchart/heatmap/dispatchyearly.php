
<?php require '../chartqueries/heatmapchart.php'?>
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
        var chart1 = new CanvasJS.Chart("chartContainer1",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            colorSet: "customColorSet",
            backgroundColor: "transparent",
            exportFileName: "Yearly Dispatchment Count - BDRRMO", 
            exportEnabled: false,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Bacolod Disaster Risk Reduction Management Office",
                fontSize: 11,
                fontColor: "#fff"
            },
            subtitles:[
                {
                    text: "Yearly Dispatchment Count",
                    fontColor: "#fff"
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
            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: <?php echo json_encode($data_points); ?>
                }
                    ] 
                });

                var chart2 = new CanvasJS.Chart("chartContainer2",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                animationDuration: 1000,
                colorSet: "customColorSet",
                backgroundColor: "transparent",
                exportFileName: "Number of Cases per Category - BDRRMO", 
                exportEnabled: false,
                toolTip: {
                shared: true  
                },
                title: { 
                text: "Bacolod Disaster Risk Reduction Management Office",
                fontSize: 11,
                fontColor: '#fff',
                },
                subtitles:[
                {
                text: "Number of Cases per Category - Year <?php echo $year?>",
                fontColor: '#fff'
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
            axisX: {	
                interval: 2,
                labelFontColor: "black",
            },
            data: [ 
                { 
                    type: "doughnut", 
                    indexLabel: "{y}", 
                    name: "Count",
                    dataPoints: <?php echo json_encode($data_points2); ?>
                }
                    ] 
                });

                var chart3 = new CanvasJS.Chart("chartContainer3",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                colorSet: "customColorSet",
                animationDuration: 1000,
                backgroundColor: "transparent",
                exportFileName: "Top Dispatchment Location Cases - BDRRMO", 
                exportEnabled: false,
                toolTip: {
                shared: true  
                },
                title: { 
                text: "Bacolod Disaster Risk Reduction Management Office",
                fontSize: 11,
                fontColor: '#fff'
                },
                subtitles:[
                {
                text: "Top Dispatchment Location Cases ",
                fontColor: '#fff'
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
            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: <?php echo json_encode($data_points4); ?>
                }
                    ] 
                });


                chart1.render();
                chart2.render();
                chart3.render();
                });

</script>
