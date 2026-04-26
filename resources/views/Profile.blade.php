<x-nav>
    <!-- A very silly way of getting the first value-->
    @if($user)
        <x-card>
            <p class="card-body">Username: {{$user->username}}</p>
            @foreach(explode(" ",$user->created_at) as $date)
                <p class="card-body">Date Created: {{$date}}</p>
                @break
            @endforeach
            @endif
        </x-card>
</x-nav>
