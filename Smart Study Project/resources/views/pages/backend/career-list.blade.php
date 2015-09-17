@extends('layouts.backend.backend')
@section('content')

<!-- page content -->
<div class="dev-page-content">
    <!-- page content container -->
    <div class="container">


        <!-- page title -->
        <div class="page-title">
            <a href="{{URL::to('career/create')}}"><button class="btn btn-primary btn-clean">Add New</button></a>
        </div>
        <!-- ./page title -->

        <!-- datatables plugin -->
        <div class="wrapper wrapper-white">
            <div class="page-subtitle">
                <h3>Career Details</h3>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sortable">
                    <thead>
                    <tr>
                        <th>File</th>
                        <th>Job Title</th>
                        <th>Posting Date</th>
                        <th>End Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($career as $value)
                    <tr>
                        <td>
                            <?php
                            if(pathinfo($value->file, PATHINFO_EXTENSION) == "doc" || pathinfo($value->file, PATHINFO_EXTENSION) == "docx")
                            {
                                ?>
                                {!! HTML::image('images/doc.png', 'a picture', array('width' => '100px','height' => '50px')) !!}
                            <?php
                            }
                            elseif(pathinfo($value->file, PATHINFO_EXTENSION) == "pdf")
                            {
                                ?>
                                {!! HTML::image('images/pdf.jpg', 'a picture', array('width' => '100px','height' => '50px')) !!}
                            <?php
                            }
                            elseif(pathinfo($value->file, PATHINFO_EXTENSION) == "xls" || pathinfo($value->file, PATHINFO_EXTENSION) == "xlsx")
                            {
                                ?>
                                {!! HTML::image('images/excel.png', 'a picture', array('width' => '100px','height' => '50px')) !!}
                            <?php
                            }
                            else
                            {
                                ?>
                                {!! HTML::image('career_uploads/'.$value->file, 'a picture', array('width' => '100px','height' => '50px')) !!}
                            <?php
                            }
                            ?>
                        </td>
                        <td>{{$value->job_title_en}}</td>
                        <td>{{$value->posting_date}}</td>
                        <td>{{$value->end_date}}</td>
                        <td>
                            <a href="{{ url('/career/'.$value->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>
                            <span class="pull-left">&nbsp;</span>
                            {!! Form::open(['url'=>'/career/'.$value->id, 'class'=>'pull-left']) !!}
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