<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--imports bootstrap?-->
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/index.ts'])
    <title>Form testing</title>
</head>
<body>
<nav class="navbar p-3" id="nav">
    <a href="#" class="navbar-brand" id="logo">
        <img src="{{asset('images/icon.svg')}}" alt="" width="30" height="24" class="d-inline-block">
        OrigamiApp
    </a>
    {{--accessing session vars wooo--}}
    @if(session()->exists('username'))
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <input type="submit" class="btn btn-dark" value="logout">
            <a class="btn btn-dark" href="{{route('dashboard')}}">Home</a>
        </form>
    @else
        <div class="flex gap-4">
            <a class="links" href="{{route('welcome')}}">Home</a>
            <a class="links" href="#">Contact</a>
            <a class="links" href="#">Report</a>
            <a class="links" href="#">My Journey</a>
        </div>
        <div class="float-end">
            <a class="links" href="{{route('signIn')}}">Sign In</a>
            <a class="btn btn-danger m-lg-1" id="sign-in" href="{{route('signUp')}}">Sign up</a>
        </div>
    @endif

</nav>
<main>
    {{ $slot }}
</main>
</body>
</html>
