@extends('layouts.backend.backend')
@section('content')

<div class="dev-page-content">
    <!-- page content container -->
    <div class="container">



        <div class="wrapper">
            <div class="row row-wider">

                <div class="col-md-9">
                    {!! Form::model($image,['url' => '/image/'.$image->id, 'method' => 'PUT', 'files'=>true]) !!}
                    <div class="form-group">
                        {!! HTML::image('gallery_uploads/'.$image->file, 'a picture', array('width' => '200px','height' => '200px')) !!}
                        <label for="userfile">Image File</label>
                        {!! Form::file('userfile',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="caption_en">Caption English</label>
                        {!! Form::text('caption_en',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="caption_bn">Caption Bangla</label>
                        {!! Form::text('caption_bn',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="description_en">Description English</label>
                        {!! Form::textarea('description_en',null,['class'=>'form-control', 'rows'=>'5', 'cols'=>'15']) !!}
                    </div>

                    <div class="form-group">
                        <label for="description_bn">Description Bangla</label>
                        {!! Form::textarea('description_bn',null,['class'=>'form-control', 'rows'=>'5', 'cols'=>'15']) !!}
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ url('/image') }}" class="btn btn-warning">Cancel</a>

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