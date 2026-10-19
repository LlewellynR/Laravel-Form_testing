<div id="game-over-screen" class="d-none text-center mx-auto p-5 rounded">
    <p>Your score is <span id="score"></span></p>
    <form method="POST" action="{{ route('dashboard.save-game') }}">
        @csrf
        <input type="hidden" name="score" value="" id="hidden_score">
        <button type="submit" class="btn btn-primary">Save game</button>
    </form>
</div>
