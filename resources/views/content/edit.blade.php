@extends('layouts.app')
@section('title', 'CRUD Website - Edit Submission')
@section('content')
<div class="container">
	{{ Form::model($content, array('route' => array('content.update', $content->id), 'method' => 'PUT', 'class'=>'form-group')) }}
		<label for="cont">Content:</label>
		<textarea class="form-control" name="text" cols="50" rows="10">{{$content->text}}</textarea><br>
		<input class="btn btn-secondary" type="submit" value="Edit">
	{{ Form::close() }}
</div>
@endsection
