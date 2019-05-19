<div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Sidebar</div>
        <div class="list-group list-group-flush">
            @foreach($users as $user)
                <a href="{{ URL::signedRoute('users.show', ['user' => $user->id]) }}" class="list-group-item list-group-item-action bg-light">{{ $user->name }}</a>
            @endforeach
        </div>
    </div>

<div id="page-content-wrapper">