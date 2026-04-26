<x-nav>
   {{--this is how you access the session vars--}}
    <p>hello {{session('username')}}</p>
    <a href="{{route('dashboard.profile')}}">PROFILE</a>
</x-nav>
