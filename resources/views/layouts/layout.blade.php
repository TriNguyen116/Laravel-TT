<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align: center">Phat trien web</h1>
    <a href="{{ url('/time') }}">Time</a>
    <a href="{{ url('/home') }}">Home</a>
    @yield('content')
</body>

</html>
