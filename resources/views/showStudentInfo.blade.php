<!DOCTYPE html>
<html>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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

<button type="button" align="left" onclick="location.href='/home' ">Home</button>

<h2> Student Info</h2>
<br>

<b>Name:</b> {{ $student->firstName }} {{ $student->lastName }}
<br>
<b>Email:</b> {{ $student->email }}
<br>
<b>CWID:</b> {{ $student->cwid }}
<br>
<b>Preferred Language:</b> {{ $student->languages }}
<br>
<b>Team Style:</b> {{ $student->teamStyle }}
<br>
<b>Classes Taken:</b> @if($student->c261) CSCI261 @endif
@if($student->c262), CSCI262 @endif
@if($student->c306), CSCI306 @endif
@if($student->c406), CSCI406 @endif
<br>
<br>
<b>Current Team:</b> Team {{ $student->teamID }}

{!! Form::model($student, ['method'=>'PATCH', 'action'=> ['AdminController@edit', $student->teamID]]) !!}
        <!--{!! Form::open(array('method'=>'PATCH', 'action' => 'HomeController@home')) !!}-->

{!! Form::label('Current Team:') !!} {!! Form::text('teamID', $student->teamID) !!}
<br>
{!!  Form::submit('Save Info') !!}
<br>
{!! Form::close() !!}


<p style="font-size:11px" align="center">Click <a href="auth/logout">here</a> to logout</p>

</body>
</html>