@extends('backend.layout.topnav')
@section('content')
  <div class="container">
          <!-- Content Header (Page header) -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> All Orders  </h1>
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
                      <input type="text" class="orderid" value="{{$order->id}}" style="display:none">
                        <tr>
                          <td><a href="#">{{$order->order_number}}</a><br>@ {{$order->orderd_on}}</td>
                          <td><?php echo $orders_model->getCustomerAddress($order->customar_id);?></td>
                          <td><?php echo $orders_model->getCustomerAddress($order->customar_id);?></td>
                          <td>
                          <select class="form-control statusoption" style="width: 100%;">
                            <option value="Order Placed" @if($order->status == 'Order Placed') Selected @endif>Order Placed</option>
                            <option value="Pending" @if($order->status == 'Pending') Selected @endif>Pending</option>
                            <option value="Processing" @if($order->status == 'Processing') Selected @endif>Processing</option>
                            <option value="Shipped" @if($order->status == 'Shipped') Selected @endif>Shipped</option>
                            <option value="On Hold" @if($order->status == 'On Hold') Selected @endif>On Hold</option>
                            <option value="Cancelled" @if($order->status == 'Cancelled') Selected @endif>Cancelled</option>
                            <option value="Delivered" @if($order->status == 'Delivered') Selected @endif>Delivered</option>
                          </select>
                        <button type="button" id="statuschangebtn" class="btn btn-success" style="float:right">Change</button>
                          </td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">{{$order->grand_total}}&nbsp;Tk</div></td>
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
