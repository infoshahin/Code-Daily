@extends('layouts.backend.backend')
@section('content')

<div class="dev-page-content">
    <!-- page content container -->
    <div class="container">



        <div class="wrapper">
            <div class="row row-wider">

                <div class="col-md-9">
                    {!! Form::model($editdata,['url' => '/event/'.$editdata->id, 'method' => 'PUT', 'files'=>true]) !!}
                    <div class="form-group">
                        <?php
                        if($editdata->file == "no_image.jpg")
                        {
                            ?>
                            {!! HTML::image('images/'.$editdata->file, 'a picture', array('width' => '200px','height' => '200px')) !!}
                        <?php
                        }
                        else
                        {
                            ?>
                            {!! HTML::image('event_uploads/'.$editdata->file, 'a picture', array('width' => '200px','height' => '200px')) !!}
                        <?php
                        }
                        ?>
                        <!--                        {!! HTML::image('notice_uploads/'.$editdata->file, 'a picture', array('width' => '200px','height' => '200px')) !!}-->
                        <label for="userfile">Image File</label>
                        {!! Form::file('userfile',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="caption_en">Event Title English</label>
                        {!! Form::text('event_name_en',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="caption_bn">Event Title Bangla</label>
                        {!! Form::text('event_name_bn',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="description_en">Event Description English</label>
                        <!--                        {!! Form::text('notice_description_en',null,['class'=>'form-control']) !!}-->
                        {!! Form::textarea('event_description_en',null,['class'=>'form-control', 'rows'=>'5', 'cols'=>'15']) !!}
                    </div>

                    <div class="form-group">
                        <label for="description_bn">Event Description Bangla</label>
                        <!--                        {!! Form::text('notice_description_bn',null,['class'=>'form-control']) !!}-->
                        {!! Form::textarea('event_description_bn',null,['class'=>'form-control', 'rows'=>'5', 'cols'=>'15']) !!}
                    </div>

                    <div class="form-group">
                        <label for="caption_en">From</label>
                        {!! Form::text('event_from',null,['class'=>'form-control datepicker', 'data-date-format'=>'YYYY/MM/DD']) !!}
                    </div>

                    <div class="form-group">
                        <label for="caption_en">To</label>
                        {!! Form::text('event_to',null,['class'=>'form-control datepicker', 'data-date-format'=>'YYYY/MM/DD']) !!}
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ url('/event') }}" class="btn btn-warning">Cancel</a>

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