@extends('layouts.master')

@section('title', 'Users')

@section('content')
    @include('partials.sidebar')

    <div class="px-4 py-4 container-fluid">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        @foreach($users as $user)
            <b>{{ $user->name }}</b> <br/>
            <a href="{{ URL::signedRoute('users.show', ['user' => $user->id]) }}">View Signed</a> |
            <a href="{{ route('users.show', ['user' => $user->id]) }}">View Normal</a>
        @endforeach

    </div>

    @include('partials.sidebarend')
@endsection


@section('footerScripts')
    @parent
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
@endsection