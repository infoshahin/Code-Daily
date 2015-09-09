@extends('layouts.backend.login')
@section('content')
<!-- page wrapper -->
        <div class="dev-page dev-page-login dev-page-login-v2">
                      
            <div class="dev-page-login-block">
                <a class="dev-page-login-block__logo">Smart Study</a>
                <div class="dev-page-login-block__form">
                    <div class="title"><strong>Welcome</strong>, please login</div>
                    
                 {!! Form::open(array('url' => "/login")) !!}                       
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Login">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group no-border margin-top-20">
                            <button class="btn btn-success btn-block">Login</button>
                        </div>
                                          
                   {!! Form::close() !!}
                </div>
                <div class="dev-page-login-block__footer">
                    © 2015 <strong>Belogin</strong>. All rights reserved.
                </div>
            </div>
            
        </div>
        @stop