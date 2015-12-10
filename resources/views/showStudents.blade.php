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

<h2>Current Students</h2>
<ul>
@foreach($students as $someStudent)
    <li>{{ $someStudent->firstName }} {{ $someStudent->lastName }}</li>
@endforeach
</ul>

<h3>Please select the minimum and maximum members per group</h3>
{!! Form::open(['url' => 'showTeams']) !!}
    <div class="form-group">
        {!! Form::label('min', 'Minimum Members: ') !!} {!! Form::text('min', null, ['class' => 'form-control']) !!}
    </div>

    <br>

    <div class="form-group">
        {!! Form::label('max', 'Maximum Members: ') !!} {!! Form::text('max', null, ['class' => 'form-control']) !!}
    </div>

    <br>

    <div class="form-group">
        {!! Form::submit('Create Teams', ['class' => 'btn btn-primary form-control']) !!}
    </div>

{!! Form::close() !!}

<p style="font-size:11px" align="center">Click <a href="auth/logout">here</a> to logout</p>

</body>
</html>