@extends('layouts.backend.backend')
@section('content')

<div class="dev-page-content">
    <!-- page content container -->
    <div class="container">



        <div class="wrapper">
            <div class="row row-wider">

                <div class="col-md-9">

                    <label>All fields are required</label>


                    {!! Form::open(['url' => '/career',  'role' => 'form', 'files'=> 'true']) !!}
                    <div class="form-group-one-unit margin-bottom-40">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-custom">
                                    <label>Job Title English</label>
                                    <input type="text" name="job_title_en" class="form-control" required/>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-custom">
                                    <label>Job Title Bangla</label>
                                    <input type="text" name="job_title_bn" class="form-control"/>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-custom">
                                    <label>Posting Date</label>
                                    <input type="text" name="posting_date" class="form-control datepicker" data-date-format="YYYY/MM/DD"/>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-custom">
                                    <label>End Date</label>
                                    <input type="text" name="end_date" class="form-control datepicker" data-date-format="YYYY/MM/DD"/>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Select <span>File</span></label>
                                <br/>
                                <input type="file" class="file btn-primary" name="userfile"/>
                                (must be in .doc/.xls/.pdf/.jpeg/.png format)
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