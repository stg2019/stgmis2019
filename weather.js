$(document).ready(function(){
    var city = "Bacolod City";
    $.ajax({
        url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + "&units=metric" + "&APPID=c718a26a437e8075a08a6eb7848e4364",
        type: "GET",
        dataType: "jsonp",
        success: function(data) {
            var temperature = showTemp(data);
            $("#temperature").html(temperature);
        }
    });

    var city = "Bacolod City";
    $.ajax({
        url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + "&units=metric" + "&APPID=c718a26a437e8075a08a6eb7848e4364",
        type: "GET",
        dataType: "jsonp",
        success: function(data) {
            var clouds = showClouds(data);
            $("#clouds").html(clouds);
        }
    });

    var city = "Bacolod City";
    $.ajax({
        url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + "&units=metric" + "&APPID=c718a26a437e8075a08a6eb7848e4364",
        type: "GET",
        dataType: "jsonp",
        success: function(data) {
            var pressure = showPressure(data);
            $("#pressure").html(pressure);
        }
    });

    var city = "Bacolod City";
    $.ajax({
        url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + "&units=metric" + "&APPID=c718a26a437e8075a08a6eb7848e4364",
        type: "GET",
        dataType: "jsonp",
        success: function(data) {
            var humidity = showHumidity(data);
            $("#humidity").html(humidity);
        }
    });

});

function showTemp(data){
    return  data.main.temp + "°C";
}

function showClouds(data){
    return  data.weather[0].description;
}

function showPressure(data){
    return  data.main.pressure;
}

function showHumidity(data){
    return  data.main.humidity + "%";
}