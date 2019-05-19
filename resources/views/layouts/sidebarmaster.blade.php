@extends('layouts.master')

@include('partials.nav')
@include('partials.sidebar')


<div class="px-4 py-4 container-fluid">
    <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

    @yield('content')

</div>

@include('partials.sidebarend')

@section('footerScripts')
    @parent
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
@endsection