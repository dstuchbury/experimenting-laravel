@extends('layouts.defaultmaster')

@section('title', 'Users')

@section('content')

    @foreach($users as $user)
        <b>{{ $user->name }}</b> <br/>
        <a href="{{ URL::signedRoute('users.show', ['user' => $user->id]) }}">View Signed</a> |
        <a href="{{ route('users.show', ['user' => $user->id]) }}">View Normal</a>
    @endforeach

@endsection


@section('footerScripts')
    @parent
@endsection