@extends('backend.layout.topnav')
@section('content')
    <div class="container">
          <!-- Content Header (Page header) -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Categories
          </h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
            <div class="col-md-4">
               <a href="{{URL::to('category/create')}}" class="btn btn-block btn-info btn-lg">Add New Category</a><br>
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
                        <th>Parent Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    @foreach($categorys as $category)
                      <tr>
                        <td>{{$category->title}}</td>
                        <td><?php echo $parent_id->parentCheck($category->parent_id);?></td>
                         <td>
                        @can('authorization', $category)
                                <div class="col-sm-6">{!! Form::open(['route' => ['category.edit', $category->id], 'method' => 'GET']) !!}  {!! Form::submit('Edit', ['class' => 'btn btn-block btn-warning btn-sm']) !!} {!! Form::close() !!}</div>
                                <!-- {!! Form::open(['route' => ['category.destroy', $category->id], 'method' => 'delete']) !!}  {!! Form::submit('Delete', ['class' => 'btn btn-app']) !!} {!! Form::close() !!} -->
                         @else
                                <div class="col-sm-6">  {!! Form::submit('Unauthorized Action', ['class' => 'btn btn-block btn-warning btn-sm']) !!} {!! Form::close() !!}</div>
                        @endcan
                       </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Parent Category</th>
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
