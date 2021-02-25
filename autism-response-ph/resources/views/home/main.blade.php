<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autism Response PH</title>
	<link rel="icon" href="/img/logo.png">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
		<header class="main-header">
			<nav class="nav">
				<!-- logo --> 
				<img src="/img/logo.png" style="max-width:150px;max-height:150px;display:block;margin-left:auto;margin-right:auto;">
				<ul>
					@auth
					<li><a href = "{{ route('home') }}">			Home</a></li>
					<li><a href = "">		Train</a></li>
					<li><a href = "{{ route('autism') }}">			About Autism</a></li>
					<li><a href = "">		Gallery</a></li>
					<li><a href = "{{ route('contact') }}">			Contact Us</a></li>
					<li>
						<form action="{{route('logout') }}" method="post">
							@csrf
							<button type="submit">Logout</a>
						</form>
					</li>
					@endauth
					@guest
					<li><a href = "{{ route('home') }}">			Home</a></li>
					<li><a href = "">		Train</a></li>
					<li><a href = "{{ route('autism') }}">			About Autism</a></li>
					<li><a href = "">		Gallery</a></li>
					<li><a href = "{{ route('contact') }}">			Contact Us</a></li>
					<li><a href = "{{ route('login') }}">			Login</a></li>
					<li><a href = "{{ route('register') }}">		Register</a></li>
					@endguest
				</ul>
			</nav>
		</header>

		@yield('content')

  	</body>
</html>