@extends('index')
@section('title', 'Crew Rotation Program')

@section('content')
<div class="cntnbx">
	<h4>Full Calendar</h4>
	<br>
	<div id='calendar'></div>
	<div class="clearfix"></div><br><br>
</div>
<style>
#calendar {
  max-width: 900px;
  margin: 40px auto;
}
</style>
@endsection