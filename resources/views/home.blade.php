<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.blade.css">
<head>
	<title>Login Page</title>
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

{!! Form::open() !!}

{!! Form::label('Username:') !!} {!! Form::text('name') !!}
<br>
{!! Form::label('Password:') !!} {!! Form::password('password') !!}
<br>
{!!  Form::submit('Log In!') !!}

{!! Form::close() !!}

<p style="font-size:11px" align="center">New user? Click <a href="studentInfo">here</a> to create an account!</p>

</body>
</html>