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
				<div  style="padding-top: 40px;">
				<img src="img/logo.png" style="width:190px;height:190px;align-items: center;">
				</div>
				<ul>
					@auth
					<li><a href = "{{ route('home') }}">			Home</a></li>
					<li><a href = "{{ route('training') }}">		Train</a></li>
					<li><a href = "{{ route('autism') }}">			About Autism</a></li>
					<li><a href = "{{ route('gallery') }}">			Gallery</a></li>
					<li><a href = "{{ route('contactus') }}">		Contact Us</a></li>
					<li><a href = "{{ route('logout') }}">			Logout</a></li>
					@endauth
					@guest
					<li><a href = "{{ route('home') }}">			Home</a></li>
					<li><a href = "{{ route('training') }}">		Train</a></li>
					<li><a href = "{{ route('autism') }}">			About Autism</a></li>
					<li><a href = "{{ route('gallery') }}">			Gallery</a></li>
					<li><a href = "{{ route('contactus') }}">		Contact Us</a></li>
					<li><a href = "{{ route('login') }}">			Login</a></li>
					@endguest
				</ul>
			</nav>
		</header>

		@yield('content')

  	</body>
</html>