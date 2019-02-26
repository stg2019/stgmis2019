
$(document).ready(function() {
    var calendar = $('#calendar').fullCalendar({
        header:{
            right:'prev,next today',
            center:'title',
            left:'month,agendaWeek,agendaDay'
        },
        events: 'admin/load.php',
        eventColor: '#348fe2',
    });
});

