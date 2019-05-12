@extends('layouts.master')

@section('title', $user->name)

@section('content')
<h1>Users.Show</h1>

<h2>{{ $user->name }} ({{ $user->id }})</h2>
@endsection
