<script src="{{ asset('assetsAdmin/js/jquery.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/counter/counterup.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/masonry/masonry.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/masonry/filter.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/owl-carousel/owl.carousel.js') }}"></script>
<script src='{{ asset('assetsAdmin/vendors/scroll/scrollbar.min.js') }}'></script>
<script src="{{ asset('assetsAdmin/js/functions.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/chart/chart.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/js/admin.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/calendar/moment.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/calendar/fullcalendar.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendors/switcher/switcher.js') }}"></script>
<script>
  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2019-03-12',
      navLinks: true, // can click day/week names to navigate views

      weekNumbers: true,
      weekNumbersWithinDays: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-03-01'
        },
        {
          title: 'Long Event',
          start: '2019-03-07',
          end: '2019-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-03-11',
          end: '2019-03-13'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T10:30:00',
          end: '2019-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-03-28'
        }
      ]
    });

  });

</script>