<!doctype html>
 <html lang="{{ app()->getLocale() }}">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> 
         <title>Create Content</title>
    </head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="/">CRUD Website</a>
			<div class="container-fluid">
				@if (Route::has('login'))
				     @auth
					 <span class="navbar-text">Hello {{$user['name']}}!</span> <a href="{{ route('content.create') }}"><i class="fas fa-plus-square"></i>New Submission</a>
				     @else
					 <ul class="navbar-nav ml-auto"> 	
						 <li class=""><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i></span>Login</a></li>
					         <li class=""><a style="margin-left: 10px;" href="{{ route('register') }}"><i class="fas fa-user-plus"></i></span>Sign Up</a></li>
				         </ul>
				     @endauth
				     
				@endif
			</div>	
		</nav>

		<div class="container">
		<form class="form-group"  method="POST" action="{{action('ContentController@store')}}" accept-charset="UTF-8">
			{{ csrf_field() }}
			<label for="cont">Content:</label>
			<textarea class="form-control" name="text" cols="50" rows="10" id="cont"></textarea><br>
			<input class="btn btn-secondary" type="submit" value="Create">
		</form>
		</div>
	</body>
</html>
