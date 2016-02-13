@extends('layouts.backend.backend')
@section('content')

<!-- page content -->
<div class="dev-page-content">
    <!-- page content container -->
    <div class="container">


        <!-- page title -->
        <div class="page-title">
            <a href="{{URL::to('image/create')}}"><button class="btn btn-primary btn-clean">Add New</button></a>
        </div>
        <!-- ./page title -->

        <!-- datatables plugin -->
        <div class="wrapper wrapper-white">
            <div class="page-subtitle">
                <h3>Image Gallery</h3>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sortable">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $value)
                    <tr>
                        <td>
                            {!! HTML::image('gallery_uploads/'.$value->product_image, 'a picture', array('width' => '100px','height' => '50px')) !!}
                        </td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->product_details}}</td>
                        <td>
                            <div class="form-group">
                                                        <label for="description_bn">Quantity</label>
                                                        <input type="number" class="form-control" name="qty">

                                                    </div>
<!--                                <input type="number" class="form-control" name="qty">-->
                        </td>
                        <td>
                            <a href="{{ url('/cart/'.$value->id.'/add') }}" class="btn btn-warning pull-left">Add to Cart</a>
                            <span class="pull-left">&nbsp;</span>
                            {!! Form::open(['url'=>'/image/'.$value->id, 'class'=>'pull-left']) !!}
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