@extends('layouts.backend.backend')
@section('content')

<div class="dev-page-content">
    <!-- page content container -->
    <div class="container">



        <div class="wrapper">
            <div class="row row-wider">

                <div class="col-md-9">


                    <label>All fields are required</label>

                    {!! Form::open(['url' => '/principal-speech',  'role' => 'form', 'files'=> 'true']) !!}
                    <div class="form-group-one-unit margin-bottom-40">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-custom">
                                    <label>Caption English</label>
                                    <input type="text" name="speech_title_en" class="form-control" required/>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-custom">
                                    <label>Caption Bangla</label>
                                    <input type="text" name="speech_title_bn" class="form-control"/>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-custom">
                                    <label>Description English</label>
                                    <textarea  name="speech_en" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-custom">
                                    <label>Description Bangla</label>
                                    <textarea  name="speech_bn" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Select <span>Image</span></label>
                                <br/>
                                <input type="file" class="file btn-primary" name="userfile"/>
                                (must be .jpg/.jpeg/.png format only)
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-danger pull-right">Save</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright">
            <div class="pull-left">
                &copy; 2015 <strong>Aqvatarius</strong>. All rights reserved.
            </div>
            <div class="pull-right">
                <a href="#">Terms of use</a> / <a href="#">Privacy Policy</a>
            </div>
        </div>
        <!-- ./Copyright -->

    </div>
    <!-- ./page content container -->

</div>
@stop