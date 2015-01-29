$('#myCarousel').carousel({
    interval:6000,
    pause: "true"
});

//full calener
      var calendar = $('#calendar').fullCalendar({
      defaultView: 'agendaWeek',
      editable: true,
        selectable: true,
      //header and other values
      select: function(start, end, allDay) {
          endtime = $.fullCalendar.formatDate(end,'h:mm tt');
          starttime = $.fullCalendar.formatDate(start,'ddd, MMM d, h:mm tt');
          var mywhen = starttime + ' - ' + endtime;
          $('#createEventModal #apptStartTime').val(start);
          $('#createEventModal #apptEndTime').val(end);
          $('#createEventModal #apptAllDay').val(allDay);
          $('#createEventModal #when').text(mywhen);
          $('#createEventModal').modal('show');
       }
    });

  $('#submitButton').on('click', function(e){
    // We don't want this to act as a link so cancel the link action
    e.preventDefault();

    doSubmit();
  });

  function doSubmit(){
    $("#createEventModal").modal('hide');
    console.log($('#apptStartTime').val());
    console.log($('#apptEndTime').val());
    console.log($('#apptAllDay').val());
    alert("form submitted");
        
    $("#calendar").fullCalendar('renderEvent',
        {
            title: $('#patientName').val(),
            start: new Date($('#apptStartTime').val()),
            end: new Date($('#apptEndTime').val()),
            allDay: ($('#apptAllDay').val() == "true"),
        },
        true);
}