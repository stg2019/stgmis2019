<?php require '../chartqueries/patientvitals.php'?>
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
            exportFileName: "Patient Assessment", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "<?php echo $fetch['patient_name']?>",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Vital Signs - Dispatch for <?php echo $fetch2['dispatched_for']?>"
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
                    type: "line", 
                    toolTipContent: "Blood Pressure - {y}", 
                    indexLabel: "{y}", 
                    showInLegend: true,
                    legendText: "Blood Pressure",
                    dataPoints: <?php echo json_encode($data_points); ?>
                },
                    { 
                    type: "line", 
                    toolTipContent: "Sa02(%) - {y}", 
                    indexLabel: "{y}", 
                    showInLegend: true,
                    legendText: "Sa02(%)",
                    dataPoints: <?php echo json_encode($data_points2); ?>
                },
                { 
                    type: "line", 
                    toolTipContent: "Pulse Rate - {y}", 
                    indexLabel: "{y}", 
                    showInLegend: true,
                    legendText: "Pulse Rate",
                    dataPoints: <?php echo json_encode($data_points3); ?>
                },
                    { 
                    type: "line", 
                    toolTipContent: "Respiratory Rate - {y}", 
                    indexLabel: "{y}", 
                    showInLegend: true,
                    legendText: "Respiratory Rate",
                    dataPoints: <?php echo json_encode($data_points4); ?>
                },
                { 
                    type: "line", 
                    toolTipContent: "Temperture - {y}", 
                    indexLabel: "{y}", 
                    showInLegend: true,
                    legendText: "Temperature",
                    dataPoints: <?php echo json_encode($data_points5); ?>
                }
                    ] 
                });

                chart1.render();
                });

</script>