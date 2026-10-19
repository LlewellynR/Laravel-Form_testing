<x-nav>
    <x-game-over>

    </x-game-over>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <div class="text-center timer m-5" id="timer">60</div>
    <p id="interval" class="text-center">.</p>
    <p id="random">...</p>
    <div class="d-flex w-100 m-5">
            <x-grid  id="grid1">

            </x-grid>

            <x-grid id="grid2">

            </x-grid>


            <x-grid id="grid3">

            </x-grid>
    </div>
    <div class="text-center">
        <button class="bi bi-grid-3x3 btn btn-outline-primary w-25" id="submit">Submit</button>
        <a class="bi bi-controller btn btn-primary w-25"> View Saved games</a>
    </div>

</x-nav>
