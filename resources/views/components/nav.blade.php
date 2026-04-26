<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/app.css">
    <!--imports bootstrap?-->
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/index.ts'])
    <title>Form testing</title>
</head>
<body>
<nav class="navbar bg-primary p-3">
    <a href="#" class="navbar-brand"><h1 class="">Heading</h1></a>

    {{--accessing session vars wooo--}}
    @if(session()->exists('username'))
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <input type="submit" class="btn btn-dark" value="logout">
            <a class="btn btn-dark" href="{{route('dashboard')}}">Home</a>
        </form>
    @else
        <a class="btn btn-dark" href="{{route('signUp')}}">Sign up</a>
        <a class="btn btn-dark" href="{{route('signIn')}}">Sign In</a>
        <a class="btn btn-dark" href="{{route('welcome')}}">Home</a>
    @endif

</nav>
<main>
    {{ $slot }}
</main>
</body>
</html>
