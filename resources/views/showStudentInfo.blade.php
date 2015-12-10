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


<p style="font-size:11px" align="center">Click <a href="auth/logout">here</a> to logout</p>

</body>
</html>