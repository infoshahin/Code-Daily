@extends('backend.layout.topnav')
@section('content')
<div class="container">
          <!-- Content Header (Page header) -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> Product Image Edit Form </h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
<!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <!-- <h3 class="box-title">General Elements</h3> -->
                  @if(Session::has('error'))
                   <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                               {{Session::get('error')}}
                   </div>
                    @endif
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
                </div><!-- /.box-header -->
                <div class="box-body">
                   {!! Form::open(['route' => ['productpicture.update', $editdata->id], 'method' => 'PUT',  'files' => true]) !!}
                    <!-- text input -->
                  <div class="form-group">
                      <label>Select Product</label>
                      <select class="form-control select2" name="product_id" required>
                      <option>Select First</option>
                      @foreach($products as $product)
                        <option @if($editdata->product_id == $product->id) selected @endif value="{{$product->id}}">{{$product->product_title}}</option>
                      @endforeach
                      </select>
                    </div>
                     <div class="form-group">
                      <label>Previous Image</label>
                     {!! HTML::image('uploads/'.$editdata->file_path, 'a picture', array('width' => '150px','height' => '150px')) !!}
                    </div>
                     <div class="form-group">
                      <label>New Product Image</label>
                      <input type="file" name="image" class="form-control">
                      <input type="hidden" name="old_image" value="{{$editdata->file_path}}">
                    </div>

                    <div class="form-group">
                        <label>Select Thumb</label>
                        <select class="form-control select2" name="thumb" required>
                          <option value="0">Select</option>
                        <option value="1"> Yes</option>
                        <option value="0"> No</option>
                        </select>
                      </div>

                               <button class="btn btn-block btn-primary">Update</button>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
</div><!-- /.container -->
@endsection
