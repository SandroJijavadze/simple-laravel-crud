@extends('layouts.app')
@section('title', 'Train Tickets')
@section('content')
@if(is_array($ret))
		<table class="table table-hover">		
		<tr>
			<thead class="thead-light">			
				<th scope="col">Departure Date</th>
				<th scope="col">Departure Time</th>
				<th scope="col">Arrival Time</th>
			</thead>
		</tr>
		@foreach($ret as $train)
		<tr>         
			<td>{{$train[0]}}</td>
			<td>{{$train[1]}}</td>
			<td>{{$train[2]}}</td>
		</tr>
			@endforeach
@else
		{!! $ret !!}
@endif
@endsection

