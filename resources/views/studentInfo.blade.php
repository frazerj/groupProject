<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.blade.css">
<head>
	<title>Student Info Page</title>
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
{!! Form::model($user, ['method'=>'PATCH', 'action'=> ['HomeController@update', $user->id]]) !!}
<!--{!! Form::open(array('method'=>'PATCH', 'action' => 'HomeController@home')) !!}-->

{!! Form::label('First Name:') !!} {!! Form::text('firstName', $user->firstName) !!}
<br>
{!! Form::label('Last Name:') !!} {!! Form::text('lastName', $user->lastName) !!}
<br>
{!! Form::label('Team Style:') !!} {!! Form::select('teamStyle', array('S' => 'Social', 'C' => 'Competitive', 'D' => 'Don\'t Care'),$user->teamStyle) !!}
<br>
{!! Form::label('Preferred Language:') !!} {!! Form::select('languages', array('C' => 'C++', 'J' => 'Java', 'P' => 'Python'),$user->languages) !!}
<br>
{!! Form::label('Courses Taken:') !!}
<br>
{!! Form::checkbox('c261','c261',$user->c261) !!} {!! Form::label('261 Programming Concepts') !!} <br>
{!! Form::checkbox('c262','c262',$user->c262) !!} {!! Form::label('262 Data Structures') !!} <br>
{!! Form::checkbox('c306','c306',$user->c306) !!} {!! Form::label('306 Software Engineering') !!} <br>
{!! Form::checkbox('c406','c406',$user->c406) !!} {!! Form::label('406 Algorithms') !!} <br>


<br>
{!!  Form::submit('Save Info') !!}
<br>
{!! Form::close() !!}


<p style="font-size:11px" align="center">Click <a href="auth/logout">here</a> to logout</p>

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