<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.blade.css">
<head>
	<title>Home Page</title>
	<style>
		.header {
			font-size: 300%;
		}
	</style>
</head>
<body>
<h1 class="header">
	CSCONNECT
	<hr>
</h1>

<button type="button" onclick="location.href='/studentInfo' ">Student Info</button>
<br>
<button type="button" onclick="location.href='/teamInfo' ">Team Info</button>

<p style="font-size:11px" align="center">Click <a href="auth/logout">here</a> to logout</p>

</body>
</html>