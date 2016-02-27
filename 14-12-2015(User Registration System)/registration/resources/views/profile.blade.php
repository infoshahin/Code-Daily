@extends('default')
@if(Session::has('sucess'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    {{Session::get('sucess')}}
</div>
@endif
<div class="container">
    <div>
        @if(Auth::check())
        <p>Welcome to your profile page {{Auth::user()->first_name}} - {{Auth::user()->last_name}} - {{Auth::user()->id}}</p>
        @endif
    </div>
</div>