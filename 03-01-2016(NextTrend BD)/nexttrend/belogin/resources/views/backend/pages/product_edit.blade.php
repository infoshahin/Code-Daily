@extends('backend.layout.topnav')
@section('content')
<div class="container">
          <!-- Content Header (Page header) -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> Product Edit Form </h1>
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
                {!! Form::open(['route' => ['product.update', $editdata->id], 'method' => 'PUT']) !!}
                    <!-- text input -->
                    <div class="form-group">
                      <label>Product Title</label>
                      <input type="text" required name="title" value="{{$editdata->product_title}}" class="form-control" placeholder="Enter ...">
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="details" required class="form-control" rows="3" placeholder="Enter ...">
                        {{$editdata->product_details}}
                      </textarea>
                    </div>
                    <!-- select -->
                    <div class="form-group">
                      <label>Select Category</label>
                      <select class="form-control" name="category" required>
                     
                      @foreach($categorys as $category)
                       @if($category->parent_id == 0)
                         @if($category->title == 'NEW ARRIVAL')
                        <!-- <option value="{{$category->id}}"> <p style="color:red">{{$category->title}}</p></option> -->
                        @endif
                        @else
                        <option value="{{$category->id}}" @if($editdata->category_id == $category->id) selected @endif>{{$category->title}}  (<?php echo $product_model->checkCategory($category->parent_id);?>)</option>
                         @endif
                      @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                     <label>Product Quantity</label>
                     <input type="number" required name="quantity" value="{{$editdata->quantity}}"  class="form-control" placeholder="Enter ...">
                   </div>

                     <div class="form-group">
                      <label>Product Price</label>
                      <input type="number" required name="price" value="{{$editdata->product_price}}" class="form-control" placeholder="Enter ...">
                    </div>
                     <!-- <div class="dropzone dropzone-previews" id="my-awesome-dropzone"></div> -->
                     <br>
                    <button class="btn btn-block btn-primary">Update</button>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
</div><!-- /.container -->
@endsection
