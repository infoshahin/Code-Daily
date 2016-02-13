@extends('master')

@section('title', 'Service : School Management ')


@section('service')

<div>
    <div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header bounceInLeft">
                        School Management
<!--                        <small>Belogin Technologies Ltd.</small>-->
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-12">

                      {!! HTML::image('images/service/school.png', 'a picture', array('border' => '5','style' => 'width:120px;height:130px;')) !!}
   
                  
                 
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
<!--                        <div class="panel-heading">-->
<!--                            <h2>School Management</h2>-->
<!--                        </div>-->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <p class="bounceInRight">
                                    The School Management System allows educational institutions to manage their whole organization through the web and it nurtures the interaction between school, teachers, students and parents in a most effective way.
                                    Belogin Technologies’s School Management System helps administrators and teachers with their daily activities and keeps parents up-to-date with their children’s progress. It has the following features:
                                </p>
                                <p>
                                    <b><ul style="list-style-type:square">
                                            <li>• Subject management</li>
                                            <li>• Class management</li>
                                            <li>• Subjects and assignments management</li>
                                            <li>• Fees management</li>
                                            <li>• Results management</li>
                                            <li>• Student search</li>
                                            <li>• Overdue students list</li>
                                            <li>• Student-Teacher interaction</li>
                                            <li>• Teacher-Parents interaction</li>
                                            <li>• Notice board management</li>
                                            <li>• Semester management</li>
                                            <li>• SMS Alerts</li>
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