<x-nav>
    <h1>Dis da sign up page</h1>
    <form class="form" method="Post" action="{{route('signUp.signUp')}}">
        @csrf
        <h2 class="">Sign in:</h2>
        <label for="username" class="form-label">Username:</label>
        <input type="text" class="form-text bg-primary" name="username">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-text bg-primary" name="password" id="password">
        <p class="form-text">
            Your password must be 8-20 characters,one upper case,one lower case and must contain a number
        </p>
        <progress class="progress-bar progress-bar-striped w-100 border-1 rounded-2" id="progress" max="5" value="0"></progress>

        <input type="submit" class="btn btn-primary">

    </form>
    @if ($errors->any())
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item">{{$error}}</li>
            @endforeach
        </ul>
    @endif
</x-nav>
