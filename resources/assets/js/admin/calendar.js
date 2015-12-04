//admin.js

$(document).ready(function() {

    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },

        events: [
			{
				title: 'All Day Event',
				start: '2015-12-01'
			},
			{
				title: 'Long Event',
				start: '2015-12-07'
			}
        ]
    });
});