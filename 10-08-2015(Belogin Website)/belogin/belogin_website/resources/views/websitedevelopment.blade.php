@extends('master')

@section('title', 'Service : Website Development')


@section('service')

<div>
    <div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Website Development
<!--                        <small>Belogin Technologies Ltd.</small>-->
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-12">
                  {!! HTML::image('images/service/website.png', 'a picture', array('border' => '5','style' => 'width:120px;height:130px;')) !!}
                    
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
<!--                        <div class="panel-heading">-->
<!--                            <h2>Website Development</h2>-->
<!--                        </div>-->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <p>
                                    We assist the prospective clients around the globe with web development, web design and search engine optimization. We offer such a best solutions to our clients which are best suited to their brand image and ultimate company goals. Belogin Technologies Ltd. provides both static and dynamic website development which is best tailored to the clients’ requirements.</p>
                                <p>
                                    We also write and manage contents for the most valuable clients.
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