@extends('layouts.app')
@section('title', 'CRUD Website')
@section('content')
<table class="table table-hover">		
<tr>
	<thead class="thead-light">			
		<th scope="col">Content</th>
		<th scope="col">Date Created</th>
		<th scope="col">Author</th>
		<th scope="col">Action</th>
	</thead>
</tr>
@foreach($contents as $content)
<tr>
	<td>{{$content['text']}}</td>
	<td>{{$content['created_at']}}</td>
	<td>{{$content['username']}}</td>
	@if($user['name'] === $content['username'])
	<td style="width: 90px">
		<div class="inline">
			<form style="margin: 0; padding: 0;"  style="display: inline;" action="{{action('ContentController@edit', $content['id'])}}">
				<!--<input type="submit" class="btn btn-secondary btn-sm" value="Edit"/>-->
				<button type="submit"  style="display: inline;"  class="btn btn-secondary btn-sm">
				    <i class="far fa-edit"></i>
				</button>
			</form>
		</div>
		<div class="inline">
			<!--<form style="margin: 0; padding: 0;"  style="display: inline;" action="{{action('ContentController@edit', $content['id'])}}">-->
			<form style="margin: 0; padding: 0;"  style="display: inline;" action="{{action('ContentController@destroy', $content['id'])}}" method="post">
			{{csrf_field()}}
			<input  style="display: inline;" name="_method" type="hidden" value="DELETE">
			<button type="submit"   style="display: inline;" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
			</form>
		</div>
	</td>
	@else
	<td>			</td>
	@endif
</tr>
@endforeach
</table>
{{ $contents->links()}}
@endsection
