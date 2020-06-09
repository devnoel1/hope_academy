<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ assets('/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ assets('/img/favicon.png')}}">

    <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('/css/bootstrap.min.css" rel="stylesheet')}}" />
  <link href="{{asset('/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
 <link href="{{asset('/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{asset('/demo/demo.css')}}" rel="stylesheet" />
</head>
<body>
    @yield('content')
</body>
</html>
