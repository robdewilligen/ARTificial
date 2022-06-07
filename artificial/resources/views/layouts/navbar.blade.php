<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <title>Navbar</title>
</head>
<body >

<nav class="px-2 sm:px-4 py-2.5 bg-background-cl">
    <div class="container flex flex-wrap justify-between items-center mx-auto bg-background-cl">
        <img src="/resources/IMG/logoWit.png" alt="logo" width="100px" height="100px">
        <div> </div>
        <div id="menu" class="flex flex-col">
            <div id="nav-icon3" >
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="menuList" class="flex justify-end bg-buttonsAndMenu hidden rounded p-3">
                <ul>
                    <li>Home</li>
                    <li>Biodiversiteit Meting</li>
                    <li>Over ARTificial</li>
                    <li>Duurzaamheidstips</li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div>
        @yield('content')
    </div>

<script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</body>
</html>
