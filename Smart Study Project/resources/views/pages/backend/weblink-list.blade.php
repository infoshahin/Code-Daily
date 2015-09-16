@extends('layouts.backend.backend')
@section('content')

<!-- page content -->
<div class="dev-page-content">
    <!-- page content container -->
    <div class="container">


        <!-- page title -->
        <div class="page-title">
            <a href="{{URL::to('weblink/create')}}"><button class="btn btn-primary btn-clean">Add New</button></a>
        </div>
        <!-- ./page title -->

        <!-- datatables plugin -->
        <div class="wrapper wrapper-white">
            <div class="page-subtitle">
                <h3>DataTables</h3>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sortable">
                    <thead>
                    <tr>
                        <th>Title English</th>
                        <th>Title Bangla</th>
                        <th>Web Link URL</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($weblinks as $value)
                    <tr>
                        <td>
                            {{$value->weblink_title_en}}
                        </td>
                        <td>{{$value->weblink_title_bn}}</td>
                        <td>{{$value->weblink_url}}</td>
                        <td>
                            <!--                            <a href="{{URL::to('/image/edit/'. json_encode($value->id))}}" class="btn btn-info btn-xs form-control"> Edit </a> {!! Form::open(['route' => ['image.destroy', $value->id], 'method' => 'delete']) !!}  {!! Form::submit('Delete', ['class' => 'btn btn-info btn-xs']) !!} {!! Form::close() !!}-->
                            <a href="{{ url('/weblink/'.$value->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>
                            <span class="pull-left">&nbsp;</span>
                            {!! Form::open(['url'=>'/weblink/'.$value->id, 'class'=>'pull-left']) !!}
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