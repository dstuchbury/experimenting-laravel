@extends('layouts.master')

@section('title', $user->name)

@section('content')
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
