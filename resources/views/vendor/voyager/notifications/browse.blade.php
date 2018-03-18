@extends('voyager::master')
<link rel="stylesheet" type="text/css" href="/fullcalendar/fullcalendar.min.css">
<div id="calendar"></div>
@section('content')

@section('javascript')
<script type="text/javascript" src="/fullcalendar/lib/moment.min.js"></script>
<script type="text/javascript" src="/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript">
    $(function() {

  // page is now ready, initialize the calendar...

  $('#calendar').fullCalendar({
    // put your options and callbacks here
  })

});
</script>
@endsection
@endsection