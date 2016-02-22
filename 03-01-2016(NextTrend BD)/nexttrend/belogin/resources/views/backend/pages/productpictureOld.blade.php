@extends('backend.layout.topnav')
@section('content')
<div class="container">
          <!-- Content Header (Page header) -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> All Products Images </h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <div class="col-md-4">
             <a href="{{URL::to('productpicture/create')}}" class="btn btn-block btn-info btn-lg">Add New Product Images</a><br>
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
                <form action="batchdelete" method="POST">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <td>
                     <div class="col-md-5">
                     <button class="btn btn-block btn-warning btn-lg">Delete?</button>
                     </div>
                     </td>
                    </tr>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                      <tr>
                      <td><input type="checkbox" name="ids_to_delete[]" value="{{$product->id}}" /></td>
                         <td><?php echo $product_model->checkProducttitle($product->product_id);?></td>
                        <td>{!! HTML::image('uploads/'.$product->file_path, 'a picture', array('width' => '150px','height' => '150px')) !!}</td>
                        <!-- <td>{!! HTML::image('uploads/products/'.$product->image, 'a picture', array('width' => '150px','height' => '150px')) !!}</td> -->
                        <td>
                           {!! Form::open(['route' => ['productpicture.edit', $product->id], 'method' => 'GET']) !!}  {!! Form::submit('Edit', ['class' => 'btn btn-app']) !!} {!! Form::close() !!}
                           {!! Form::open(['route' => ['productpicture.destroy', $product->id], 'method' => 'delete']) !!}  {!! Form::submit('Delete', ['class' => 'btn btn-app']) !!} {!! Form::close() !!}
                       </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
</div><!-- /.container -->
@endsection
