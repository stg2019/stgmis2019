
function clock() {
    var now = new Date();
    var TwentyFourHour = now.getHours();
    var hour = now.getHours();
    var min = now.getMinutes();
    var sec = now.getSeconds();
    var mid = 'PM';
    if (sec < 10) {
        sec = "0" + sec;
    }
    if (min < 10) {
        min = "0" + min;
    }

    if (hour > 12) {
        hour = hour - 12;
    }
    if (hour < 10) {
        hour = "0" + hour;
    }

    if(hour==0){ 
        hour=12;
    }

    if(TwentyFourHour < 12) {
        mid = 'AM';
    }

    document.getElementById('currentTime').innerHTML = hour+':'+min + ':' + sec + mid ;
    setTimeout(clock, 1000);

}
clock();

function showday () {
    var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
    var day = new Date().getDay();
    todayIs = daylist[day];
    document.getElementById("day").innerHTML = todayIs;
}
showday();
