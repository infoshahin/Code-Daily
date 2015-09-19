@extends('layouts.backend.backend')
@section('content')

<!-- page content -->
<div class="dev-page-content">
    <!-- page content container -->
    <div class="container">


        <!-- page title -->
        <div class="page-title">
            <a href="{{URL::to('principal-speech/create')}}"><button class="btn btn-primary btn-clean">Add Principal's Speech</button></a>
        </div>
        <!-- ./page title -->

        <!-- datatables plugin -->
        <div class="wrapper wrapper-white">
            <div class="page-subtitle">
                <h3>Principal's Speech</h3>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sortable">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Speech Title</th>
                        <th>Speech</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($speech as $value)
                    <tr>
                        <td>
                            {!! HTML::image('principal_uploads/'.$value->file, 'a picture', array('width' => '100px','height' => '50px')) !!}
                        </td>
                        <td>{{$value->speech_title_en}}</td>
                        <td>{{$value->speech_en}}</td>
                        <td>
                            <a href="{{ url('/principal-speech/'.$value->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>
                            <span class="pull-left">&nbsp;</span>
                            {!! Form::open(['url'=>'/principal-speech/'.$value->id, 'class'=>'pull-left']) !!}
                            {!! Form::hidden('_method', 'DELETE') !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <!-- ./datatables plugin -->


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
<!-- ./page content -->
@stop