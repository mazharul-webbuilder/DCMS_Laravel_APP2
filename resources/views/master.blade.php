<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}bootstrap/css/app.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
        <div class="navbar-brand">
            <a href="{{route('home')}}" class="navbar-brand">DCMS</a>
        </div>
        <ul class="navbar-nav mx-auto">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('home')}}" class="nav-link">All Members</a></li>
            <li><a href="{{route('calculation.new')}}" class="nav-link"><span class="badge bg-primary">Add New Calculation</span></a></li>
            <li><a href="{{route('manage.all')}}" class="nav-link">Manage ALL</a></li>
        </ul>
    </div>
</nav>

@yield('content')


<script src="{{asset('/')}}bootstrap/js/jquery-3.6.3.js"></script>
<script src="{{asset('/')}}bootstrap/js/bootstrap.js"></script>
</body>

</html>
