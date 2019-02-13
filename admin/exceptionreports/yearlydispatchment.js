var year = [];
CanvasJS.addColorSet("customColorSet", [ 
    "#f6e58d",
    "#ffbe76", 
    "#ff7979", 
    "#eb4d4b", 
    "#7ed6df",
    "#22a6b3",
    "#6ab04c",
]);
var chart = new CanvasJS.Chart("chartContainer", {
    exportFileName: "Monthly Population",
    exportEnabled: true,
    theme: "light2",
    animationEnabled: true,
    animationDuration: 1000,
    zoomEnabled: true,
    zoomType: "x",
    panEnabled: true,
    colorSet: "customColorSet",
    toolTip: {
        shared: true,
        animationEnabled: true
    },
    title: {
        text: "Bacolod Disaster Risk Reduction Management Office",
        fontSize: 17
    },
    subtitles:[
        {
            text: "Dispatch for the Current Year"
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
        title: "Total Dispatch", 
        includeZero: false,
        labelFontColor: "black",
    }, 
    data: [{
        type: "pie",
        showInLegend: false,
        legend: "Total Dispatch",
        name: "Total Dispatch",
        dataPoints: year
    }
          ]
});

$.ajax({
    type: 'GET',    
    url: 'yearlydispatchment.json',
    contentType: "application/json",
    dataType: 'json',
    success: function(field) {
        for (var i = 0; i < field.length; i++) {
            year.push({
                label: field[i].year,
                y: field[i].count
            });
        }
        $('#alert').slideDown();
        $('#alerttext').html('<span class="fa fa-info-circle"></span> Select in the dropdown for the chart type.');
        setTimeout(function() {
            $('#alert').fadeOut('slow');
        }, 5500);
        chart.render();
    }
});

//for the switching of graphs 2 dimension data
var chartType = document.getElementById('chartType');
chartType.addEventListener( "change",  function(){
    chart.options.data[0].type = chartType.options[chartType.selectedIndex].value;
    chart.render();
});