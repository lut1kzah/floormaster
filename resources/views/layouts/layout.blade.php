<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>

<header class="shapka">
    <div class="logo">

        <img src="{{asset('assets/images/avatarka.png')}}" alt="ava" width="100" >
    </div>
</header>
<main class="main">

    @yield('content')


</main>

<footer>
   тут домра
</footer>


</body>
</html>
