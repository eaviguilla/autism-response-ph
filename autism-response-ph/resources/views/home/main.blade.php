<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autism Response PH</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
		<header class="main-header">
			<nav class="nav">
				<!-- logo --> 
				<img src="C:/Users/Admin/Documents/austism.web/image/autismlogo.jpg" style="width:150px;height:150px;">
				<ul>
					<li><a href = "{{ route('home') }}">			Home</a></li>
					<li><a href = "">		Train</a></li>
					<li><a href = "{{ route('about') }}">			About Autism</a></li>
					<li><a href = "">		Gallery</a></li>
					<li><a href = "{{ route('contact') }}">			Contact Us</a></li>
					<li><a href = "{{ route('register') }}">		Register</a></li>
				</ul>
			</nav>
		</header>

		@yield('content')
		
  	</body>
</html>