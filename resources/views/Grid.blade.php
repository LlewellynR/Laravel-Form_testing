<x-nav>
    <div class="d-flex w-100">
    <x-grid>

    </x-grid>
    <x-grid>

    </x-grid>
    <x-grid>

    </x-grid>
    </div>
    <div class="text-center">
        {{--this is how you access the session vars--}}
        <a class="bi bi-grid-3x3 btn btn-outline-primary w-25" href="{{route("dashboard.grid")}}"> New grid</a>
        <a class="bi bi-controller btn btn-primary w-25"> View Saved games</a>
    </div>

</x-nav>
