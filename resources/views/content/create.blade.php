@extends('layouts.app')
@section('title', 'CRUD Website - New Submission')
@section('content')
	<div class="container">
		<form class="form-group"  method="POST" action="{{action('ContentController@store')}}" accept-charset="UTF-8">
			{{ csrf_field() }}
			<label for="cont">Content:</label>
			<textarea class="form-control" name="text" cols="50" rows="10" id="cont"></textarea><br>
			<input class="btn btn-secondary" type="submit" value="Create">
		</form>
		</div>
@endsection
