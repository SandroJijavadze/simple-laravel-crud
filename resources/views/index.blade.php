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
			<th>Author</th>
			<th>Content</th>
			<th>Date Created</th>
		</tr>
		@foreach($contents as $content)
		<tr>
			<td>{{$content['username']}}</td>
			<td>{{$content['text']}}</td>
			<td>{{$content['created_at']}}</td>
		</tr>
		@endforeach
		</table>
	</body>
</html>
