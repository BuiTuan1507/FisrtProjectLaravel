<!DOCTYPE html>
<html>
<head>
	<title>@yield('head.title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   @yield('head.css')
</head>
<body>
	@include('layout.bar')
		<div>
		
	@yield('body.content')
  @include('layout.footer')
   @yield('body.js')
	</div>
</body>
</html>