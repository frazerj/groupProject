<!DOCTYPE html>
<html>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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

<button type="button" align="left" onclick="location.href='/home' ">Home</button>

<h2>Current Teams</h2>
<ul>

@for($i = 1; $i <= $numTeams; $i++)
    <li>Team <?php echo $i?></li>
        <ul>
            @foreach($students as $student)
                @if($student->teamID == $i)
                    <li><a href="/showStudents/{{ $student->id }}">{{ $student->firstName }} {{$student->lastName}}</a></li>
                @endif
            @endforeach
        </ul>
@endfor
</ul>



<p style="font-size:11px" align="center">Click <a href="auth/logout">here</a> to logout</p>

</body>
</html>