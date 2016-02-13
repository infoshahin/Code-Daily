@extends('master')

@section('title', 'Porfolio')

@section('portfolioheader')
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
                    <li class="dropdown"><a href="http://localhost/belogin/public/aboutus">ABOUT</a></li>
                    <li class="active"><a href="http://localhost/belogin/public/portfolio">PORTFOLIO</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/service">SERVICE</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/contact">CONTACT</a></li>
                </ul>
            </div><!--end sidebar-->
        </div><!--end container-->
    </nav><!--end nav-->
</header>
@endsection

@section('portfolio')
<section id="product">
    <div class="container product ">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                <a href="" id="service-icon" ><img src="images/naamta.png" ></a>
                <a href=""><h2>Namtaa</h2></a>
                <p>Namtaa is an exclusive accounting software. It has maximum number of features which can make you relax in counting and business also.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
                <a href=""><img src="images/smart study.png"></a>
                <a href=""><h2>Smart Study</h2></a>
                <p>Standard educational institution should have a dynamic solution to serve its all purpose. Smart study is designed considering all issues.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
                <a href=""><img src="images/notificamos.png"></a>
                <a href=""><h2>Notificamos</h2></a>
                <p>Notificamos is a unique service. Marketers and customers can be engaged in common platform where both party will win. </p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <a href=""><img src="images/HRM.png"></a>
                <a href=""><h2>HRM</h2></a>
                <p>Our HRM software is ready and will definitely facilitate any organization to nicely manage its employees.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
                <a href=""><img src="images/ecommerce1.png"></a>
                <a href=""><h2>E-Commerce</h2></a>
                <p>Our designed E-commerce CMS is customizable and has most contemporary features to run faster E-Business.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 wow fadeIn" data-wow-duration="3s" data-wow-delay="1s">
                <a href=""><img src="images/news.png"></a>
                <a href=""><h2>News Portal</h2></a>
                <p>Our news portal CMS is smart in design, secured, well-organized and ofcourse its customizable. </p>
            </div>
        </div>
        
    </div><!--enc container-->

</section><!--end product section-->

@endsection