<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.master')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    @section('content')
    <h1>SELAMAT DATANG!!{{$namadepan}} {{$namabelakang}}</h1>
    <h3>Teriama kasih telah bergabung di sanberbook. Social Media kita bersama!</h3>
    @endsection
</body>
</html>