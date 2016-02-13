@extends('master')

@section('title', 'Services')

@section('serviceheader')
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
                    <li class="dropdown"><a href="http://localhost/belogin/public/portfolio">PORTFOLIO</a></li>
                    <li class="active"><a href="http://localhost/belogin/public/service">SERVICE</a></li>
                    <li class="dropdown"><a href="http://localhost/belogin/public/contact">CONTACT</a></li>
                </ul>
            </div><!--end sidebar-->
        </div><!--end container-->
    </nav><!--end nav-->
</header>
@endsection

@section('service')
<section class="portfolio" id="portfolio">
    <div class="container-fluid" style="background: #22313F;">
        <div class="container">
            <div class="row">
<!--                <h1 class="text-center">PORTFOLIO</h1>-->
                <ul class="portfolioFilter">
                    <li><a href="#" data-filter="*" class="current">All Services</a></li>
                    <li><a href="#"  data-filter=".financial">Financial Institution</a></li>
                    <li><a href="#" data-filter=".food">Food and Restaurant</a></li>
                    <li><a href="#" data-filter=".ecommerce">e-Commerce</a></li>
                    <li><a href="#" data-filter=".corporate">Corporate and Industrial</a></li>
                    <li><a href="#" data-filter=".sme">SME and Chain Shop</a></li>
                    <li><a href="#" data-filter=".tourism">Tourism and Transportation</a></li>
                    <li><a href="#" data-filter=".medical">Medical</a></li>
                    <li><a href="#" data-filter=".education">Education</a></li>
                </ul>
            </div>
        </div>
    </div><!--end portfolio header container-fluid-->
    <div class="container">
        <div class="row">
            <div class="portfolioContainer wow fadeInUp">
                <div class="financial food ecommerce corporate sme tourism education col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/customizedsoftwaredevelopment.png" class="img-responsive" alt="image">
                    <h4>Software Development</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="http://localhost/belogin/public/service/softwaredevelopment"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/softwaredevelopment"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="financial ecommerce food corporate sme tourism medical education col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/website.png" class="img-responsive " alt="image">
                    <h4>Website Development</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="#"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/websitedevelopment"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="ecommerce financial food corporate sme tourism medical education col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/hands_devices.png" class="img-responsive" alt="image"/>
                    <h4 href="google.com">Digital Marketing</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="http://google.com"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/digitalmarketing"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="ecommerce financial food corporate sme tourism medical education col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/webapps.png" class="img-responsive" alt="image"/>
                    <h4>Web Application Development</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="#"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/webapp"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <br>
                <br>
                <div class="financial corporate medical col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/erp.png" class="img-responsive " alt="image">
                    <h4>ERP</h4>
                        <div class="hover-box">

<!--                            <a id="view-service" href="#over-service"><i class="fa fa-search"></i></a>-->
                            <a href="http://localhost/belogin/public/service/erp"><i class="fa fa-link"></i></a>
                        </div>
                </div>

                <div class="ecommerce financial food corporate sme tourism medical education col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/mobileapplication.png" class="img-responsive" alt="image">
                    <h4>Mobile Application</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="#over-service"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/mobileapp"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="financial food ecommerce tourism col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/sms.png" class="img-responsive" alt="image">
                    <h4>SMS Marketing</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="#over-service"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/smsmarketing"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="financial ecommerce corporate sme tourism medical education col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/cloud.png" class="img-responsive" alt="image">
                    <h4>Cloud Computing</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="#over-service"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/cloudcomputing"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="food sme col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/ecommerce.png" class="img-responsive" alt="image">
                    <h4>E-Commerce</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="#over-service"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/ecommerce"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="food ecommerce sme tourism col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/networkingortechnicalsupport.png" class="img-responsive" alt="image">
                    <h4>Notificamos</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="#over-service"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/notificamos"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="corporate medical col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/content.png" class="img-responsive" alt="image">
                    <h4>Enterprise Content Management</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="#over-service"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/contentmanagement"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="medical col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/doc.png" class="img-responsive" alt="image">
                    <h4>Hospital Management</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="#over-service"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/hospitalmanagement"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="education col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/e_learning.png" class="img-responsive" alt="image">
                    <h4>E-Learning</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="#over-service"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/elearning"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="education col-xs-6 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <img src="images/service/school.png" class="img-responsive" alt="image">
                    <h4>School Management</h4>
                    <div class="hover-box">

<!--                        <a id="view-service" href="#over-service"><i class="fa fa-search"></i></a>-->
                        <a href="http://localhost/belogin/public/service/schoolmanagement"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
<!--            <div class="over-service" id="over-service">-->
<!--                <a href="" class="close-icon"><i class="fa fa-times"></i></a>-->
<!--                Test-->
<!--                <img src="">-->
<!--            </div>-->

            </div>
        </div>
    </div><!--end portfolio container-->
</section><!-- End Portfolio Section-->
@endsection