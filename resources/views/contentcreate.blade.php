<!doctype html>
 <html lang="{{ app()->getLocale() }}">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
 
         <title>Create Content</title>
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

		<h2>New content:</h2>
		{{ Form::open(array('route' => array('content.store'), 'method' => 'POST')) }}
			{{ Form::textarea('text', '') }}<br>
			{{ Form::submit('Create')}}
		{{ Form::close() }}
	</body>
</html>
