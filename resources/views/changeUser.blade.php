<x-nav>
    <form method="post" action="{{route('dashboard.changeUsername')}}" class="w-50 m-auto mt-4">
        @csrf
        <p class="description display-6">Change username:</p>
        <label for="username" class="form-label"> New Username:</label>
        <input type="text" name="username" class="form-control" placeholder="{{auth()->user()->username}}">
        <label for="password" class="form-label mt-4">Password:</label>
        <div class="input-group">
            <input type="password" class="form-control" name="password" id="password">
            <button class="btn btn-outline-dark" type="button"><i class="bi bi-eye-slash reveal"></i></button>
        </div>
        <label for="password_confirm" class="form-label mt-4">Password:</label>
        <div class="input-group">
            <input type="password" class="form-control" name="password_confirmation" id="password">
        </div>
        <input type="submit" value="Change Username" class="btn btn-outline-primary">
        @if ($errors->any())
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item">{{$error}}</li>
                @endforeach
            </ul>
        @endif
        @if(session('success'))
            <ul class="list-group">
                <li class="list-group-item">{{session('success')}}</li>
            </ul>
        @endif
    </form>
</x-nav>
