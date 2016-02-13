@extends('master')

@section('title', 'Speech : Managing Director ')



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
                <a href="{{URL::to('/globalconnection')}}"><i class="fa fa-table"></i> Global Connection</a>
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
                        <a class="active-menu" href="{{URL::to('/mdspeech')}}">Managing Director's Speech</a>
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
                        Managing Director
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
<!--                            <h2>Managing Director's Speech</h2>-->
<!--                        </div>-->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <img src="images/Md.png" border="5" style="width:160px;height:200px; border:2px solid black;"><br>
                                <p>
                                    <h2>Sustainable Development through ICT</h2>

                                    <p>The inspiration of development requires innovation in all the spheres. Without shaking hands with ICT, it is not possible to manage the sustainability in the fields of development.</p>
                                    <p>Belogin Technologies Ltd. has been promising to provide best ICT Services required for upgrading the national and global entities. Our vision is to uphold the global harmony through ICT Services.</p>
                                    <p>We are always focusing on equity based services and try to follow the guidelines shown by the pioneers in the field of ICT. We don't put emphasis on money making rather we are emphasizing on learning and updating. We keep ourselves updated and always try to spread our knowledge and experiences among others to build a smarter nation.</p>
                                    <p>I believe that Belogin Technologies Ltd. will contribute to the sustainable development of the nation through ICT.</p>
                                    <p>Thanks and Regards,</p><br>

                                <img src="images/Md Sign.png"  style="width:100px;height:40px; ">

                                    <p>Md.Jahirul Islam<br>
                                    Managing Director<br>
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