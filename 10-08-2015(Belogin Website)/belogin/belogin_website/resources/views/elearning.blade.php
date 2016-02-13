@extends('master')

@section('title', 'Service : E-Learning ')


@section('service')

<div>
    <div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        E-Learning
<!--                        <small>Belogin Technologies Ltd.</small>-->
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-12">

                      {!! HTML::image('images/service/e_learning.png', 'a picture', array('border' => '5','style' => 'width:120px;height:130px;')) !!}
   
                  
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
<!--                        <div class="panel-heading">-->
<!--                            <h2>E-Learning</h2>-->
<!--                        </div>-->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <p>
                                    Learning is a continuous process. Our e learning software is designed in such a way that any student will get it more interesting and useful means of learning. The software has been built considering the psychological comprehension of the students. It has the following notable feature:
                                </p>
                                <p>
                                    <b><ul style="list-style-type:square">
                                            <li>• Both English and Bangla medium students will be beneficiary</li>
                                            <li>• Proper examples are given in every case</li>
                                            <li>• Quiz and puzzle type questions are set</li>
                                            <li>• Online mock test on every subject</li>
                                            <li>• Online bill payment system</li>
                                            <li>• Instant result publication</li>
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