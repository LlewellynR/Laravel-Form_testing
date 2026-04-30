 <div class="m-auto w-50 mt-5 ">
        <form class="form" method="Post" action="{{ $action }}">
            @csrf
            <h2 class="display-5">{{ $heading }}</h2>
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" name="username" value="{{old('username')}}">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" id="password" value="">
            <input type="submit" class="btn btn-primary mt-3">
            @if ($errors->any())
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>
