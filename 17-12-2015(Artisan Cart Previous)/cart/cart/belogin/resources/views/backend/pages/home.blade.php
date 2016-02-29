@extends('backend.layout.topnav')
@section('content')
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1> Dashboard  </h1>
          </section>
          <!-- Main content -->
          <section class="content">
             <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info animated fadeInLeft">
                <div class="box-header with-border">
                  <h3 class="box-title">Recent Orders</h3>
                  <div class="box-tools pull-right">
                   <!--  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Bill To</th>
                          <th>Ship TO</th>
                          <th>Status</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($orders as $order)
                        <tr>
                          <td><a href="{{URL::to('orders')}}">{{$order->order_number}}</a><br>@ {{$order->orderd_on}}</td>
                          <td><?php echo $orders_model->getCustomerAddress($order->customar_id);?></td>
                          <td><?php echo $orders_model->getCustomerAddress($order->customar_id);?></td>
                          <td><span class="label label-success">{{$order->status}}</span></td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">{{$order->grand_total}}&nbsp;Tk</div></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="{{URL::to('orders')}}" class="btn btn-sm btn-info btn-flat pull-left">View All Orders</a>
                  <!-- <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a> -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
                <div class="box box-info animated fadeInRight">
                <div class="box-header with-border">
                  <h3 class="box-title">Recent Customers</h3>
                  <div class="box-tools pull-right">
                   <!--  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                        </tr>
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
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="{{URL::to('customers')}}" class="btn btn-sm btn-info btn-flat pull-left">View All Customers</a>
                  <!-- <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a> -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.container -->
@endsection
