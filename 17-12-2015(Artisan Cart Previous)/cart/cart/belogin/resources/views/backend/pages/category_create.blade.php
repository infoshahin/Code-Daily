@extends('backend.layout.topnav')
@section('content')
        <div class="container">
          <!-- Content Header (Page header) -->
          <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1> Category Form </h1>
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
                   {!! Form::open(['url' => 'category', 'method' => 'POST']) !!}
                    <!-- text input -->
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" required name="title" class="form-control" placeholder="Enter ...">
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="details" required class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <!-- select -->
                    <div class="form-group">
                      <label>Parent</label>
                      <select class="form-control" name="parent" required>
                      @foreach($categorys as $category)
                        @if($category->parent_id == 0)
                        <option value="{{$category->id}}"> <p style="color:red">{{$category->title}}</p></option>
                      @else
                         <option value="{{$category->id}}">{{$category->title}}   (<?php echo $product_model->checkCategory($category->parent_id);?>)</option>
                         @endif
                      @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Parent</label>
                      <select class="form-control" name="show_home" required>
                    
                         <option value="0">No</option>
                         <option value="1">Yes</option>
                       
                      </select>
                    </div>


                    <button class="btn btn-block btn-primary">Save</button>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
        </div><!-- /.container -->
@endsection
