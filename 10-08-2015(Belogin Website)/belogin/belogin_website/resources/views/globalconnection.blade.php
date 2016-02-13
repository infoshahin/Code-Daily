@extends('master')

@section('title', 'Global Connections ')



@section('aboutus')
<div id="wrapper">
   <!--/. NAV TOP  -->
<nav id="navbar2" class="navbar-default navbar-side" role="navigation">
<div class="" >
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" id="navbar-toggle" data-toggle="collapse" data-target=".col1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                         <a class="navbar-brand" href="{{URL::to('/aboutus')}}"></a>
                    </div><!--end navbar header-->
    <div class="sidebar-collapse col1">
        <ul class="nav" id="main-menu">

            <li>
                <a  href="{{URL::to('/aboutus')}}"><i class="fa fa-dashboard"></i> About Us</a>
            </li>
            <li>
                <a href="{{URL::to('/mission')}}"><i class="fa fa-desktop"></i> Mission & Vision</a>
            </li>
            <li>
                <a href="{{URL::to('/motto')}}"><i class="fa fa-bar-chart-o"></i> Motto</a>
            </li>
            <li>
                <a href="{{URL::to('/clientvalue')}}"><i class="fa fa-qrcode"></i> Client Value</a>
            </li>

            <li>
                <a class="active-menu" href="{{URL::to('/globalconnection')}}"><i class="fa fa-table"></i> Global Connection</a>
            </li>
<!--            <li>-->
<!--                <a href="form.html"><i class="fa fa-edit"></i> Forms </a>-->
<!--            </li>-->


            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Speech<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{URL::to('/chairmanspeech')}}">Chairman's Speech</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/mdspeech')}}">Managing Director's Speech</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/ceospeech')}}">CEO's Speech</a>
                    </li>
<!--                    <li>-->
<!--                        <a href="#">Second Level Link<span class="fa arrow"></span></a>-->
<!--                        <ul class="nav nav-third-level">-->
<!--                            <li>-->
<!--                                <a href="#">Third Level Link</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Third Level Link</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Third Level Link</a>-->
<!--                            </li>-->
<!---->
<!--                        </ul>-->
<!---->
<!--                    </li>-->
                </ul>
            </li>
<!--            <li>-->
<!--                <a href="empty"><i class="fa fa-fw fa-file"></i> Empty Page</a>-->
<!--            </li>-->
        </ul>

    </div>
       </div>

</nav>
<!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Global Connections
<!--                        <small>Belogin Technologies Ltd.</small>-->
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Australia
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <ul>
                                <li> <i class="fa fa-map-marker fa-3x"></i> <span>&nbsp;2/53 Major Road, Fawkner, Melbourne, Vic-3060</span></li>
                                <li> <i class="fa fa-phone fa-2x"></i><span>&nbsp;+61452390337 </span></li>
                                <li> <i class="fa fa-envelope-o fa-2x"></i> <span>&nbsp;contact.aus@belogin.com</span></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Italy
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <ul>
                                <li> <i class="fa fa-map-marker fa-3x"></i> <span>&nbsp;Via Alessandro Astesani 45 20161 Milan</span></li>
                                <li> <i class="fa fa-phone fa-2x"></i><span>&nbsp;+393802886858 </span></li>
                                <li> <i class="fa fa-envelope-o fa-2x"></i> <span>&nbsp;info.italy@belogin.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        United Kingdom
                    </div>
                    <div class="panel-body">
                        <div  class="col-sm-12">
                            <ul>
                                <li> <i class="fa fa-map-marker fa-3x"></i> <span>&nbsp;159, Kingsway, Enfield, En3 4HU</span></li>
                                <li> <i class="fa fa-phone fa-2x"></i><span>&nbsp;+447794573795 </span></li>
                                <li> <i class="fa fa-envelope-o fa-2x"></i> <span>&nbsp;contact.uk@belogin.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Switzerland
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <ul>
                                <li> <i class="fa fa-map-marker fa-3x"></i><span>&nbsp;Rue Carqueron 4, 1220 les avanchets, Geneva</span></li>
                                <li> <i class="fa fa-phone fa-2x"></i><span>&nbsp;+41786289211 </span></li>
                                <li> <i class="fa fa-envelope-o fa-2x"></i> <span>&nbsp;tajul.swiss@belogin.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Global Network</h2>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <p>
                                    Globalization breaks the territorial boundaries and makes the globe a single village. We feel proud to serve our valuable clients irrespective of their locations.
                                    We truly believe in “Think Globally, Act Locally” and customize our products and services according to the clients’ requirements.
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