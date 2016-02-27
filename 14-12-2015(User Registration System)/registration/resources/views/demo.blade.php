@extends('default')
@section('body')
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        <li><a href="{{ url('/logout') }}">Log Out</a></li>
        <li><a href="/profile">{{ Auth::user()->first_name }}</a></li>
        @else
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/user/create') }}">Sign Up</a></li>
        @endif
    </ul>

</div><!-- /.navbar-collapse -->
@stop