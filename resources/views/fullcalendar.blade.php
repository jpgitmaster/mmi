@extends('index')
@section('title', 'Crew Rotation Program')

@section('content')
<div class="clearfix"></div>
<div class="cntnbx" style="width: 90%; margin: 0 auto;">
	<h4>Full Calendar</h4>
	<br>
	<div id='calendar'></div>
	<div class="clearfix"></div><br><br>
</div>
<style>
#calendar {
  font-size: 14px;
}
#calendar .fc-body .fc-resource-area .fc-cell-content{
	padding: 5px;
}
#calendar .fc-event, #calendar .fc-event:hover{
	color: #FFF;
}
</style>
@endsection