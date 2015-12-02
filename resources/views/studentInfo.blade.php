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

<h2> Student Info</h2>
{!! Form::open() !!}

{!! Form::label('Name:') !!} {!! Form::text('name') !!}
<br>
{!! Form::label('Preferred languages:') !!} {!! Form::text('prefLanguages') !!}
<br>
{!! Form::label('Team style:') !!} {!! Form::select('teamStyle', array('S' => 'Social', 'C' => 'Competitive', 'D' => 'Don\'t Care')) !!}
<br>
{!! Form::label('Courses Taken:') !!} {!! Form::textarea('prefLanguages') !!}
<br>
{!!  Form::submit('Create Account!') !!}
<br>
{!! Form::close() !!}

</body>
</html>

<!--<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="studentInfo.css">
<head>
	<title>Student Info</title>
	<div id="backBorder">
		<h1 id="titleHeader"> CSCONNECT </h1>
		<div id="menu">
			Student Info<br>
			<div id="studentInfo">
				Name: <input type="text" name="name" style="width: 180px;"><br>
				Preferred Languages: <input type="text" name="prefLang" style="width: 180px;"><br>
				Team Style:
				<select name="teamStyle" style="width: 185px;">
					<option value="social">Social</option>
					<option value="competitive">Competitive</option>
					<option value="np">Don't Care</option>
				</select><br>
				Courses Taken: <input type="text" name="coursesTaken" style="width: 180px;"><br>
				<p align="left"><button type="button" align="left">Edit Information</button></p>
			</div>
		</div>
	</div>
</head>
</html>/-->