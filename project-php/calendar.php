<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='./calander/lib/main.css' rel='stylesheet' />
<script src='./calander/lib/main.js'></script>

<?php


 $list = getActs();


 ?>
<script>

 var todayDate = new Date().toISOString().slice(0, 10);

 var list = [];
 let obj = "";
    <?php

    foreach($list as $row)
    { ?>
        
      obj = {
        title:"<?php echo $row['Titulo']; ?>",
        start: "<?php echo $row['Fecha']; ?>",
        extendedProps: {
          id:"<?php echo $row['Id_acto']; ?>",
        },
        
      };
      list.push(obj);
    <?php }

     ?>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      height: '100%',
      expandRows: true,
      slotMinTime: '08:00',
      slotMaxTime: '20:00',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      select: function(arg) {
        // var title = prompt('Event Title:');
        // if (title) {
        //   calendar.addEvent({
        //     title: title,
        //     start: arg.start,
        //     end: arg.end,
        //     allDay: arg.allDay
        //   })
        // }
        // calendar.unselect()
      },
      eventClick: function(info) {
        location.href = "act.php?id="+info.event.extendedProps.id;
      },
      initialView: 'dayGridMonth',
      initialDate: todayDate,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      nowIndicator: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events:list
      // events: [

      //   // {
      //   //   title: 'All Day Event',
      //   //   start: '2020-09-01',
      //   // },
      //   // {
      //   //   title: 'Long Event',
      //   //   start: '2020-09-07',
      //   //   end: '2020-09-10'
      //   // },
      //   // {
      //   //   groupId: 999,
      //   //   title: 'Repeating Event',
      //   //   start: '2020-09-09T16:00:00'
      //   // },
      //   // {
      //   //   groupId: 999,
      //   //   title: 'Repeating Event',
      //   //   start: '2020-09-16T16:00:00'
      //   // },
      //   // {
      //   //   title: 'Conference',
      //   //   start: '2020-09-11',
      //   //   end: '2020-09-13'
      //   // },
      //   // {
      //   //   title: 'Meeting',
      //   //   start: '2020-09-12T10:30:00',
      //   //   end: '2020-09-12T12:30:00'
      //   // },
      //   // {
      //   //   title: 'Lunch',
      //   //   start: '2020-09-12T12:00:00'
      //   // },
      //   // {
      //   //   title: 'Meeting',
      //   //   start: '2020-09-12T14:30:00'
      //   // },
      //   // {
      //   //   title: 'Happy Hour',
      //   //   start: '2020-09-12T17:30:00'
      //   // },
      //   // {
      //   //   title: 'Dinner',
      //   //   start: '2020-09-12T20:00:00'
      //   // },
      //   // {
      //   //   title: 'Birthday Party',
      //   //   start: '2020-09-13T07:00:00'
      //   // },
      //   // {
      //   //   title: 'Click for Google',
      //   //   url: 'http://google.com/',
      //   //   start: '2020-09-28'
      //   // }
      // ]
    });

    calendar.render();
  });

</script>
<style>

  html, body {
    overflow: hidden; /* don't do scrollbars */
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .fc-header-toolbar {
    /*
    the calendar will be butting up against the edges,
    but let's scoot in the header's buttons
    */
    padding-top: 1em;
    padding-left: 1em;
    padding-right: 1em;
  }

</style>
</head>
<body>

  <div id='calendar-container'>
    <div id='calendar'></div>
  </div>

</body>
</html>
