@extends('master')

@section('title', 'Service : Cloud Computing')

@section('aboutusheader')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewreport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/custom-styles.css">

    <link rel="stylesheet" type="text/css" href="../css/cs-slider.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">

    <link rel="stylesheet" type="text/css" href="../css/font-awesome-4.3.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
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
                <a class="navbar-brand" href="#"><img src="../images/beloginlogo white.png"></a>
            </div><!--end navbar header-->
            <div class="" id="sidebar">
                <h4 class="sidbar-header">NAVIGATION</h4>
                <ul class="nav navbar-nav menu pull-right">
                    <li class="dropdown"><a href="http://localhost/belogin/public/home">HOME</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/aboutus">ABOUT</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/portfolio">PORTFOLIO</a></li>
                    <li class="active"><a href="http://localhost/belogin/public/service">SERVICE</a></li>
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
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<div>
    <div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Cloud Computing
<!--                        <small>Belogin Technologies Ltd.</small>-->
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-12">
                    <img src="../images/service/cloud.png" border="5" style="width:120px;height:130px; /*border:2px solid black;*/"><br>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
<!--                        <div class="panel-heading">-->
<!--                            <h2>Cloud Computing</h2>-->
<!--                        </div>-->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <p>
                                    Belogin Technologies Ltd. can move your files quickly, securely, and seamlessly without disrupting your team’s work. We will clean up your data and keep it easily accessible anytime you need it. We can serve several purposes through cloud storage. It can act as a Web-based external hard drive without the clunky hardware; a data backup source for disaster recovery; a file-sharing platform to collaborate with or send supersize files to clients and colleagues; and a productivity tool for anytime, anywhere access to your files from any device. Belogin Technologies’s Cloud storage solutions can spare you many headaches while also helping you become more efficient in handling and accessing your files.
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