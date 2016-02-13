<!-- Stored in resources/views/layouts/child.blade.php -->

@extends('master')

@section('title', 'Home')

@section('homeheader')
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
                    <li class="active"><a href="http://localhost/belogin/public/home">HOME</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/aboutus">ABOUT</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/portfolio">PORTFOLIO</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/service">SERVICE</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/contact">CONTACT</a></li>
                </ul>
            </div><!--end sidebar-->
        </div><!--end container-->
    </nav><!--end nav-->
</header>
@endsection

@section('home')
<header id="header_two" style="background:white; color:red;">
    <!----start-content-slider---->
    <div class="container-fluid">
        <div id="da-slider" class="da-slider">
            <div id="intro" class="da-slide">
                <div class="da-title" style="color:#22313F;">
                    <h3><b> Website Development</b></h3>
                </div>
                <div class="da-img">
                    <img class="img-responsive" src="images/website.png" alt="Drupal Powered" title="Presenting the Drupalien" />
                </div>
            </div>
            <div id="software" class="da-slide">
                <div class="da-title" style="color:#22313F;">
                    <h3><b> Software Development</b></h3>
                </div>
                <div class="da-img">
                    <img class="img-responsive" src="images/software development.png" alt="Drupal Powered" title="Presenting the Drupalien" />
                </div>
            </div>
            <div id="user-experience" class="da-slide">
                <div class="da-title"  style="color:#22313F;">
                    <h3><b>  E - Commerce<br />
                        Development</b></h3>
                </div>
                <div class="da-img">
                    <img class="img-responsive" src="images/ecommerce_home.png" alt="Drupal Powered" title="Presenting the Drupalien" />
                </div>
            </div>
            <div id="design" class="da-slide" >
                <div class="da-title"  style="color:#22313F;">
                    <h3><b> Search Engine<br />
                        Optimization</b></h3>
                </div>
                <div class="da-img">
                    <img class="img-responsive" src="images/seo.png" alt="Drupal Powered" title="Presenting the Drupalien" />
                </div>
            </div>
        </div><!--end slide-->
    </div><!--end container-->
</header><!--end header-->
<footer style="background-color:black; padding:13px; ">
    <div class="container footer">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              
                <div class="social-icon">
                    <ul>
                        <li><a href="https://www.facebook.com/blgntech" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<!--                        <li><a href="" title="Twitter"><i class="fa fa-twitter"></i></a></li>-->
                        <li><a href="https://www.linkedin.com/company/belogin-technology-ltd-"  target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li><li>
<!--                        <li><a href="" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>-->
<!--                        <li><a href="" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>-->
<!--                        <li><a href="" title="Drbbble"><i class="fa fa-dribbble"></i></a></li>-->
<!--                        <li><a href="" title="Behance"><i class="fa fa-behance"></i></a></li>-->
                    </ul>
                </div>
               
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 service-list">
                <h3></h3>
               
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 contact">
               
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 address">
                <a href="http://belogin.com/" target="_blank"><h5 style="color:white;">Belogin Technologies Ltd.</h5></a>
              
            </div>
        </div>
    </div>
</footer><!--end footer -->
@endsection