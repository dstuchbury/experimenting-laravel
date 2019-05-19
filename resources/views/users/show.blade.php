@extends('layouts.sidebarmaster')

@section('title', $user->name)

@section('sidebar')
    <div class="sidebar-heading">All Users</div>
    <div class="list-group list-group-flush">
        @foreach($allusers as $sidebarUser)
            <a href="{{ route('users.show', ['user' => $sidebarUser->id]) }}" class="list-group-item list-group-item-action bg-light">{{ $sidebarUser->name }}</a>
        @endforeach
    </div>
@endsection

@section('content')

<div class="py-4 px-4">
    <h1>Users.Show</h1>

    @infopage
        @slot('heading')
            {{ $user->name }}
        @endslot

        @slot('pill')
        {{ $user->id }}
        @endslot

        @slot('description')
            This guy is a legend
        @endslot

        Other text in the component
    @endinfopage

    @endsection

</div>
