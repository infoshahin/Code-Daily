@extends('master')

@section('title', 'Speech : CEO')

@section('aboutusheader')
<header id="header">
    <nav id="navbar" class="navbar  navbar-default menu-bar" role="navigation">
        <div class="container" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="navbar-toggle" data-toggle="collapse" data-target="">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/beloginlogo white.png"></a>
            </div><!--end navbar header-->
            <div class="" id="sidebar">
                <h4 class="sidbar-header">NAVIGATION</h4>
                <ul class="nav navbar-nav menu pull-right">
                    <li class="dropdown"><a href="http://localhost/belogin/public/home">HOME</a></li>
                    <li class="active"><a href="http://localhost/belogin/public/aboutus">ABOUT</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/portfolio">PORTFOLIO</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/service">SERVICE</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/contact">CONTACT</a></li>
                </ul>
            </div><!--end sidebar-->
        </div><!--end container-->
    </nav><!--end nav-->
</header>
@endsection

@section('aboutus')
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<div id="wrapper">
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a href="aboutus"><i class="fa fa-dashboard"></i> About Us</a>
                </li>
                <li>
                    <a href="mission"><i class="fa fa-desktop"></i> Mission & Vision</a>
                </li>
                <li>
                    <a href="motto"><i class="fa fa-bar-chart-o"></i> Motto</a>
                </li>
                <li>
                    <a href="clientvalue"><i class="fa fa-qrcode"></i> Client Value</a>
                </li>

                <li>
                    <a href="globalconnection"><i class="fa fa-table"></i> Global Connection</a>
                </li>
                <!--            <li>-->
                <!--                <a href="form.html"><i class="fa fa-edit"></i> Forms </a>-->
                <!--            </li>-->


                <li>
                    <a class="active-menu" href="#"><i class="fa fa-sitemap"></i> Speech<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="chairmanspeech">Chairman's Speech</a>
                        </li>
                        <li>
                            <a href="mdspeech">Managing Director's Speech</a>
                        </li>
                        <li>
                            <a class="active-menu" href="ceospeech">CEO's Speech</a>
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

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Chief Executive Officer
<!--                        <small>Belogin Technologies Ltd.</small>-->
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-12">

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
<!--                        <div class="panel-heading">-->
<!--                            <h2>CEO's Speech</h2>-->
<!--                        </div>-->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <img src="images/ceo.png" border="5" style="width:160px;height:200px; border:2px solid black;"><br>
                                <p>
                                    <h2>Updated and Updating!</h2>
                                    <p>Success is a logical reality. It comes through hardworking, consistency and planning as well. Belogin Technologies Ltd. helps the business entity to identify the needs, to design the plan and to execute the plan for getting success through the brilliance of technologies.</p>
                                    <p>We learn to be updated and thus keep others updating so that they can cope up with challenging and changing situations.</p>
                                    <p>Honesty, transparency, best quality, superior innovation, fair pricing are the core competencies of Belogin Technologies Ltd. We listen to the valuable clients, understand their demand and provide best solutions that fit to them. We value all the customers and our customers are the reflection of our promising words.</p>
                                    <p>Visit Belogin Technologies Ltd. and enjoy our services and be proud to tell others!</p>

                                    <p>Yours Sincerely,</p><br>
                                <img src="images/ceosign.png"  style="width:100px;height:40px; ">
                                    <p>Md. Rafiqul Islam Tushar<br>
                                    CEO<br>
                                    Belogin Technologies Ltd.</p>
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