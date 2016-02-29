@extends('backend.layout.topnav')
@section('content')
<div class="container">
          <!-- Content Header (Page header) -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> Tags </h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
            <div class="col-md-4">
              <a href="{{URL::to('tag/create')}}" class="btn btn-block btn-info btn-lg">Add New Tag</a><br>
            </div>
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
                        <th>#</th>
                        <th>Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $count = 1;?>
                    @foreach($tags as $tag)
                      <tr>
                         <td>{{$count}}</td>
                        <td>{{$tag->tag_title}}</td>
                        <td>
                         @can('authorization', $tag)
                            <div class="col-sm-6">{!! Form::open(['route' => ['tag.edit', $tag->id], 'method' => 'GET']) !!}  {!! Form::submit('Edit', ['class' => 'btn btn-block btn-warning btn-sm']) !!} {!! Form::close() !!}</div>
                          @else
                           <div class="col-sm-6">  {!! Form::submit('Unauthorized Action', ['class' => 'btn btn-block btn-warning btn-sm']) !!} {!! Form::close() !!}</div>
                          @endcan
                       </td>
                      </tr>
                      <?php $count++;?>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Title</th>
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
