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


<h2>Team {{$teamid}}</h2>
<ul>
    @foreach($students as $someStudent)
        <li>{{ $someStudent->firstName }} {{ $someStudent->lastName }}</li>
    @endforeach
</ul>




<p style="font-size:11px" align="center">Click <a href="auth/logout">here</a> to logout</p>

</body>
</html>