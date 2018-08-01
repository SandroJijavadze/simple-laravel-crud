 <!doctype html>
 <html lang="{{ app()->getLocale() }}">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
 
         <title>Random Website</title>
    </head>
	<body>
		@if (Route::has('login'))
		 <div class="top-right links">
		     @auth
			 <h2>Hello {{$user['name']}}!</h2>
		     @else
			 <a href="{{ route('login') }}">Login</a>
			 <a href="{{ route('register') }}">Register</a>
		     @endauth
		 </div>
		@endif
 		<table border="1" style="width:100%">		
		<tr>
			<th>Content</th>
			<th>Date Created</th>
			<th>Author</th>
			<th colspan="2">Action</th>
		</tr>
		@foreach($contents as $content)
		<tr>
			<td>{{$content['text']}}</td>
			<td>{{$content['created_at']}}</td>
			<td>{{$content['username']}}</td>
			@if($user['name'] === $content['username'])
			<td>
				<form action="{{action('ContentController@edit', $content['id'])}}">
					<input type="submit" value="Edit"/>
				</form>
				<form action="{{action('ContentController@destroy', $content['id'])}}" method="post">
                    		{{csrf_field()}}
                    		<input name="_method" type="hidden" value="DELETE">
                    		<button type="submit">Delete</button>
 	                   	</form>
			</td>
			@else
			<td>			</td>
			@endif
		</tr>
		@endforeach
		</table>
	</body>
</html>
