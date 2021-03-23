<!DOCTYPE html>
<html>
<head>
	<title> Flash Crud </title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<style type="text/css">
		header{
				text-align: center;
			}	
			table{
				border: solid 1px;
				width: 100%;
			}
			th,td{
				border: solid 1px;
				
			}
	</style>
</head>
<body>
	<header>
		<a href="/" style="float: right;">Home</a>
		@yield('header')
 	</header>

	@yield('content')

	<footer>
		@yield('footer')
	</footer>
</body>
</html>