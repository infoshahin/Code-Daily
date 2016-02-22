@extends('layout')
@section('title', 'Login')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 mt" >
                <div class="form-section">
                    {!! Form::open(['class' => 'cmxform', 'id' => 'marchant-form']) !!}
<!--                    <form class="cmxform" id="marchant-form" action="" method="post">-->
                        <div class="form-group">
<!--                            <label for="text" class="re-form-text">Email:</label>-->
<!--                            <input class="form-control" type="email" name="email_id" id="email" placeholder="email" required="" required="">-->
                            {!!Form::label('email','Email',array('class' => 're-form-text'))!!}
                            {!!Form::email('email', null,array('class' => 'form-control','id' => 'email', 'placeholder' => 'Email', 'name'=>'email'))!!}
                        </div>
                        <div class="form-group">
<!--                            <label  for="Password3"  class="re-form-text">Password:</label>-->
<!--                            <input type="password" class="form-control" id="Password" placeholder="Password" equired="" required="">-->
                            {!!Form::label('password','Password',array('class' => 're-form-text'))!!}
                            {!!Form::password('password',array('class' => 'form-control','id' => 'password', 'placeholder' => 'Password', 'name'=>'password'))!!}
                        </div>
                        <div class="form-group re-btn mt" >
<!--                            <button type="submit" class="btn btn-primary  btn-lg form-bt pull-right re-btn-text"> SUBMIT</button>-->
                            {!!Form::submit('LOGIN', array('class' => 'btn btn-primary  btn-lg form-bt pull-right re-btn-text'))!!}
                        </div>
<!--                    </form>-->
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@stop