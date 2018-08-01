 <!doctype html>
 <html lang="{{ app()->getLocale() }}">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> 
	 <style>
	 div.inline { float:left; }
	 </style>
	 <title>CRUD Website</title>
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
 		<table style="width: 90%; margin: auto;" class="table table-hover">		
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
	</body>
</html>
