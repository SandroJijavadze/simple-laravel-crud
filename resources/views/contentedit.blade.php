<!doctype html>
 <html lang="{{ app()->getLocale() }}">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
 
         <title>Edit Content</title>
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

		<h2>You are editing  content #{{$contents['id']}}</h2>
		{{ Form::model($content, array('route' => array('content.update', $content->id), 'method' => 'PUT')) }}
			{{ Form::textarea('text', $contents['text']) }}<br>
			{{ Form::submit('Edit')}}
		{{ Form::close() }}
	
	</body>
</html>
