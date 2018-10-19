<?php require '../chartqueries/reportsrequesttransport.php'?>
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
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Monthly Request of Transport Count - BDRRMO", 
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
                    text: "Monthly Request of Transport Count - Year <?php echo $year?>"
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
                interval: 1,
                labelFontColor: "black",
            },
            axisY: { 
                title: "Total Request of Transport", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Number of Request of Transport",
                    name: "Request of Transport",
                    //    markerType: "cross",
                    // color: "#0173c4",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $fjan['total']?> },
                         { label: "February", y: <?php echo $ffeb['total']?> },
                        { label: "March", y: <?php echo $fmar['total']?> },
                         { label: "April", y: <?php echo $fapr['total']?> },
                        { label: "May", y: <?php echo $fmay['total']?> },
                         { label: "June", y: <?php echo $fjun['total']?> },
                        { label: "July", y: <?php echo $fjul['total']?> },
                         { label: "August", y: <?php echo $faug['total']?> },
                        { label: "September", y: <?php echo $fsep['total']?> },
                         { label: "October", y: <?php echo $foct['total']?> },
                        { label: "November", y: <?php echo $fnov['total']?> },
                         { label: "December", y: <?php echo $fdec['total']?> }
                    ] 
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
            exportFileName: "Quarterly Dispatchment Count - BDRRMO", 
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
                    text: "Quarterly Dispatchment Count - Year <?php echo $year?>"
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
                interval: 1,
                labelFontColor: "black",
            },
            axisY: { 
                title: "Total Dispatchment", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Number of Request of Transport",
                    name: "Request of Transport",
                    //    markerType: "cross",
                    // color: "#0173c4",
                    dataPoints: [ 
                        { label: "Quarter 1", y: <?php echo $q1['total']?> },
                         { label: "Quarter 2", y: <?php echo $q2['total']?> },
                        { label: "Quarter 3", y: <?php echo $q3['total']?> },
                         { label: "Quarter 4", y: <?php echo $q4['total']?> }
                    ] 
                }
            ] 
        });
      
                chart1.render();
                chart2.render();
              
                });

</script>
