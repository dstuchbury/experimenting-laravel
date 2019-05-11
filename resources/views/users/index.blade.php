@extends('layouts.master')

@section('title', 'Users')

@section('content')
<div class="container-fluid">

    @foreach($users as $user)
        <b>{{ $user->name }}</b> <br/>
        <a href="{{ URL::signedRoute('users.show', ['user' => $user->id]) }}">View Signed</a> |
        <a href="{{ route('users.show', ['user' => $user->id]) }}">View Normal</a>
    @endforeach

</div>

@endsection

@section('footerScripts')
    @parent
@endsection