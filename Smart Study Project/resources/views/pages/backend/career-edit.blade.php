@extends('layouts.backend.backend')
@section('content')

<div class="dev-page-content">
    <!-- page content container -->
    <div class="container">



        <div class="wrapper">
            <div class="row row-wider">

                <div class="col-md-9">
                    {!! Form::model($career,['url' => '/career/'.$career->id, 'method' => 'PUT', 'files'=>true]) !!}
                    <div class="form-group">
                        <?php
                        if(pathinfo($career->file, PATHINFO_EXTENSION) == "doc" || pathinfo($career->file, PATHINFO_EXTENSION) == "docx")
                        {
                            ?>
                            {!! HTML::image('images/doc.png', 'a picture', array('width' => '100px','height' => '50px')) !!}
                        <?php
                        }
                        elseif(pathinfo($career->file, PATHINFO_EXTENSION) == "pdf")
                        {
                            ?>
                            {!! HTML::image('images/pdf.jpg', 'a picture', array('width' => '100px','height' => '50px')) !!}
                        <?php
                        }
                        elseif(pathinfo($career->file, PATHINFO_EXTENSION) == "xls" || pathinfo($career->file, PATHINFO_EXTENSION) == "xlsx")
                        {
                            ?>
                            {!! HTML::image('images/excel.png', 'a picture', array('width' => '100px','height' => '50px')) !!}
                        <?php
                        }
                        else
                        {
                            ?>
                            {!! HTML::image('career_uploads/'.$career->file, 'a picture', array('width' => '100px','height' => '50px')) !!}
                        <?php
                        }
                        ?>
                        <label for="userfile">File</label>
                        {!! Form::file('userfile',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="caption_en">Job Title English</label>
                        {!! Form::text('job_title_en',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="caption_bn">Job Title Bangla</label>
                        {!! Form::text('job_title_bn',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="description_en">Posting Date</label>
                        {!! Form::text('posting_date',null,['class'=>'form-control datepicker', 'data-date-format'=>'YYYY/MM/DD']) !!}
                    </div>

                    <div class="form-group">
                        <label for="description_bn">End Date</label>
                        {!! Form::text('end_date',null,['class'=>'form-control datepicker', 'data-date-format'=>'YYYY/MM/DD']) !!}
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ url('/career') }}" class="btn btn-warning">Cancel</a>

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