@extends('default')
@section('body')
@if(Session::has('error'))
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
    {{Session::get('error')}}
</div>
@endif
@if(Session::has('sucess'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    {{Session::get('sucess')}}
</div>
@endif
<div class="row">
    <div class="col-md-4 col-md-offset-4">
{!! Form::open(array('url' => 'login', 'method' => 'post')) !!}
        <div class="form-group">
{!!Form::label('email','Email')!!}
{!!Form::text('email', null,array('class' => 'form-control'))!!}
            </div>
        <div class="form-group">
{!!Form::label('password','Password')!!}
{!!Form::password('password',array('class' => 'form-control'))!!}
            </div>
{!!Form::submit('Login', array('class' => 'btn btn-primary'))!!}
{!! Form::close() !!}
    </div>
</div>
@stop