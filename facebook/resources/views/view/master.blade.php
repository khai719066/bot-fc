<!DOCTYPE html>
<html>
<head>
	<title>abc</title>
	<style type="text/css">
		#wraper
		{
			width: 950px;
			height: auto;
			margin: 0px auto; 

		}

		#header
		{
			width: auto;
			height: 100px;
			background: red; 
		}

		#content
		{
			width: auto;
			height: 500px;
			background: green; 
		}

		#footer
		{
			width: auto;
			height: 100px;
			background: blue; 

		}
	</style>
</head>
<body>
	<div id="wraper"> 
		<div id="header">
			@section('slider')
				cau hoi ?
			@show
		</div>

		<div id="content">
			@yield('noidung')		
		</div>
		
		<div id="footer">
			
		</div>
	</div>
</body>
</html>