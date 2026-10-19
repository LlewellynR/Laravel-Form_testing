<x-nav>
    <h1>Leaderboard:</h1>
    <table class="table table-light">
        <tr>
            <th scope="col">Username:</th>
            <th scope="col">Grid score:</th>
        </tr>

        @foreach($scores as $score)
            <tr>
                <td>{{ $score->user->username}}</td>
                <td>{{ $score->grid_score }}</td>
            </tr>
        @endforeach
    </table>
</x-nav>
