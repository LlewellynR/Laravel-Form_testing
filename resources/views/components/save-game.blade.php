<div class="d-none text-center mx-auto p-5 rounded bg-primary">
    <h3></h3>
    <form method="post" action="{{route("dashboard.save-game")}}">
        @csrf
        <input type="hidden" value="" id="hiddenScore" name="score">
        <input type="text" class="form-text">
        <input type="submit" class="btn-success">
    </form>
</div>
