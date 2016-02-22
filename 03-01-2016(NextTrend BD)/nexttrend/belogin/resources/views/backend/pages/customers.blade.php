@extends('backend.layout.topnav')
@section('content')
  <div class="container">
          <!-- Content Header (Page header) -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1> All Customers </h1>
      </section>
        <!-- Main content -->
          <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
            <div class="col-md-4">
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
                      <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                          <td>{{$customer->firstname}}</td>
                          <td>{{$customer->lastname}}</td>
                          <td><a href="mailto:{{$customer->email}}?Subject=Hello%20Cart" target="_top">{{$customer->email}}</a></td>
                          <td>{{$customer->phone}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </div><!-- /.container -->
@endsection
