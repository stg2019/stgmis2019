<?php require '../chartqueries/dashboard.php'?>
<?php require '../chartqueries/requestedmedicalstocks.php'?>
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
            exportFileName: "Monthly Dispatchment - BDRRMO", 
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
                    text: "Medical Supplies Current Stocks - <?php echo $year?>"
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
                    type: "doughnut", 
                    //showInLegend: true, 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    //legendText: "<?php echo $f1['medical_supply_name']?>",
                    //name: "Total Patients this year",
                    dataPoints: <?php echo json_encode($data_points); ?>
                }
                    ] 
                });
                var chart2 = new CanvasJS.Chart("chartContainer2",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                colorSet: "customColorSet",
                animationEnabled: true,
                animationDuration: 1000,
                exportFileName: "Monthly Requisition of Medical Supplies - BDRRMO", 
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
                text: "Monthly Requisition of Medical Supplies - Year <?php echo $year?>"
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
                title: "Total Requested Medical Supply", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Number of Requested Medical Supply",
                    name: "Requested Medical Supply",
                    //    markerType: "cross",
                    // color: "#0173c4",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $fjan2['total']?> },
                         { label: "February", y: <?php echo $ffeb2['total']?> },
                        { label: "March", y: <?php echo $fmar2['total']?> },
                         { label: "April", y: <?php echo $fapr2['total']?> },
                        { label: "May", y: <?php echo $fmay2['total']?> },
                         { label: "June", y: <?php echo $fjun2['total']?> },
                        { label: "July", y: <?php echo $fjul2['total']?> },
                         { label: "August", y: <?php echo $faug2['total']?> },
                        { label: "September", y: <?php echo $fsep2['total']?> },
                         { label: "October", y: <?php echo $foct2['total']?> },
                        { label: "November", y: <?php echo $fnov2['total']?> },
                         { label: "December", y: <?php echo $fdec2['total']?> }
                    ] 
                }
            ] 
        });
        var chart3 = new CanvasJS.Chart("chartContainer3",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            colorSet: "customColorSet",
            exportFileName: "Monthly Dispatchment - BDRRMO", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Bacolod Disaster Risk Reduction Management Office",
                fontSize: 10
            },
            subtitles:[
                {
                    text: "Total Requested Per Medical Supply - <?php echo $year?>"
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
                    type: "doughnut", 
                    //showInLegend: true, 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    //legendText: "<?php echo $f1['medical_supply_name']?>",
                    //name: "Total Patients this year",
                    dataPoints: <?php echo json_encode($data_points); ?>
                }
                    ] 
                });

                chart1.render();
                chart2.render();
                chart3.render();
                });

</script>