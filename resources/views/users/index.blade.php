@extends('layouts.defaultmaster')

@section('title', 'Users')

@section('content')

    @foreach($users as $user)
        <p>
            <b>{{ $user->name }}</b> <br/>
            <a href="{{ route('users.show', ['user' => $user->id]) }}">View Profile</a>
        </p>
    @endforeach

@endsection


@section('footerScripts')
    @parent
@endsection