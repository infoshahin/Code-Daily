@extends('backend.layout.topnav')
@section('content')
  <div class="container">
          <!-- Content Header (Page header) -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> All Products </h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <div class="col-md-4">
             <a href="{{URL::to('product/create')}}" class="btn btn-block btn-info btn-lg">Add New Product</a><br>
            </div>
              <!-- general form elements -->
            <div class="col-xs-12">
               @if(Session::has('sucess'))
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <h4><i class="icon fa fa-check"></i> Status!</h4>
                               {{Session::get('sucess')}}
                              </div>
                   @endif
                   @if(Session::has('fail'))
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                               {{Session::get('fail')}}
                              </div>
                   @endif
              <div class="box box-info">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                  @can('authorization', $product)
                      <tr>
                        <td>{{$product->product_title}}</td>
                        <td><?php echo $product_model->checkCategory($product->category_id);?></td>
                        <td>{{$product->product_price}}</td>
                          <td>{{$product->quantity}}</td>
                        <!-- <td>{!! HTML::image('uploads/products/'.$product->image, 'a picture', array('width' => '150px','height' => '150px')) !!}</td> -->
                        <td>
     <div class="col-sm-6">{!! Form::open(['route' => ['product.edit', $product->id], 'method' => 'GET']) !!}  {!! Form::submit('Edit', ['class' => 'btn btn-block btn-warning btn-sm']) !!} {!! Form::close() !!}</div>
    <div class="col-sm-6"> {!! Form::open(['route' => ['product.destroy', $product->id], 'method' => 'delete']) !!}  {!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger btn-sm']) !!} {!! Form::close() !!}</div>
                       </td>
                      </tr>
                      @endcan
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
  </div><!-- /.container -->
@endsection
