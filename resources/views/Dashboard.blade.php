<x-nav>
    <div class="text-center welcome">
        {{--this is how you access the session vars--}}
        <h1 class="display-5">Hello {{session('username')}}</h1>
        <a class="bi bi-grid-3x3 btn btn-outline-primary w-25" href="{{route("dashboard.grid")}}"> New grid</a>
        <a class="bi bi-controller btn btn-primary w-25"> View Saved games</a>
    </div>

</x-nav>
