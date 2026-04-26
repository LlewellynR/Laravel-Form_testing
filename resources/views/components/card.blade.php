<div class="card">
    <p class="card card-header">Profile Details:</p>
    {{$slot}}
    <div class="card-footer">
        <a href="{{route('dashboard.changeUser')}}" class="btn btn-primary">Change Username</a>
    </div>
</div>
