@extends('master')

@section('title', 'Service : ERP ')



@section('service')

<div>
    <div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        ERP
<!--                        <small>Belogin Technologies Ltd.</small>-->
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-12">
                    
                      {!! HTML::image('images/service/erp.png', 'a picture', array('border' => '5','style' => 'width:120px;height:130px;')) !!}
                   
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
<!--                        <div class="panel-heading">-->
<!--                            <h2>Enterprise Resource Planning</h2>-->
<!--                        </div>-->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <p>
                                    Belogin Technologies Ltd. has designed its services for addressing today’s key business challenges. With our right blend of solution approach and domain expertise, we enable customers to drive maximum business value through Enterprise Resource Planning Software solution. Our service capabilities cover the entire life cycle of enterprise applications with core focus in business modules such as ERP, Accounting, Inventory, HRM, Stock Management, LC, POS, Pension Maintenance Software etc. Belogin Technologies Ltd. offers the industry’s most comprehensive Enterprise Application services with different features.
                                </p>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /. ROW  -->
</div>
</div>
</div>
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>
@endsection