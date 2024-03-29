@extends('backend.layout.topnav')
@section('content')
<div class="container">
          <!-- Content Header (Page header) -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>  Tag Add Form  </h1>
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
                   {!! Form::open(['url' => 'tag', 'method' => 'POST']) !!}
                    <!-- text input -->
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" required name="title" class="form-control" placeholder="Enter ...">
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
