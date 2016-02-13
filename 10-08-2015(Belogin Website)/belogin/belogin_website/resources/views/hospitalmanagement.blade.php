@extends('master')

@section('title', 'Service : Hospital Management ')


@section('service')

<div>
    <div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Hospital Management
<!--                        <small>Belogin Technologies Ltd.</small>-->
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-12">

                      {!! HTML::image('images/service/doc.png', 'a picture', array('border' => '5','style' => 'width:120px;height:130px;')) !!}
   
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
<!--                        <div class="panel-heading">-->
<!--                            <h2>Hospital Management</h2>-->
<!--                        </div>-->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <p>Hospital Information System will manage a hospital with paperless solution. It integrates the entire resources of a hospital into one integrated software application.
                                Belogin Technologies’s Hospital Management System makes such an attempt and offers a world class solution, which fits with all kinds of hospital related works.
                                The most important benefits that a hospital gains out of a Hospital Management System implementation are:</p>
                                <p>
                                    <b><ul style="list-style-type:square">
                                            <li>• Least manpower requirements</li>
                                            <li>• Instant information recovery</li>
                                            <li>• Timely treatment decisions</li>
                                            <li>• Online appointment system</li>
                                            <li>• Online bill payment system</li>
                                            <li>• Bed, ward, cabin status</li>
                                            <li>• Find medicine status of hospital stock</li>
                                            <li>• Patient admission status</li>
                                            <li>• Manage appointment with doctors</li>
                                            <li>• View prescription details</li>
                                            <li>• View blood bank status</li>
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