@extends('master')

@section('title', 'Service : E-Commerce ')

@section('service')

<div>
    <div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        E-Commerce
<!--                        <small>Belogin Technologies Ltd.</small>-->
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-12">

                      {!! HTML::image('images/service/ecommerce.png', 'a picture', array('border' => '5','style' => 'width:120px;height:130px;')) !!}
   
                    
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
<!--                        <div class="panel-heading">-->
<!--                            <h2>E-Commerce Development</h2>-->
<!--                        </div>-->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <p>
                                    In today's fast paced market, more and more businesses are leveraging technology to reach their customers and to stay ahead of the competition. Whether you're a B2B company, wholesaler, retailer, sole proprietor, or affiliate marketer, we have an e-commerce solution package that fits your needs and budget. Our E-commerce development and management team can help.
                                </p>
                                <p>
                                    <b><ul style="list-style-type:square">
                                            <li>• Plan, design, and build an online shopping site</li>
                                            <li>• Evaluate the best suited e-commerce platform</li>
                                            <li>• Create & manage content on the regular basis with great care</li>
                                            <li>• Ensure compliance with digital security regulations</li>
                                        </ul></b>
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