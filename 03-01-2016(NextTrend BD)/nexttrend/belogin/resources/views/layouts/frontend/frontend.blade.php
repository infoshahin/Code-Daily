<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <![endif]-->
    <title>@yield('title')</title>
    <meta name="keywords" content="keywords" />
    <meta name="description" content="description" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../../../../nexttrend/public/image/ne-image/favicon-next.ico"/>
    <!--    {!! HTML::style('assets/styles/bootstrap/3.3.5/css/bootstrap.min.css',array('id'=> 'dev-css' )) !!}-->
    {!! HTML::style('assets/styles/font-awesome.min.css',array('id'=> 'dev-css' )) !!}
    {!! HTML::style('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css',array('id'=> 'dev-css' )) !!}
    {!! HTML::style('assets/pe-icon-7-stroke/css/helper.css',array('id'=> 'dev-css' )) !!}
    {!! HTML::style('assets/styles/minimal-menu.css',array('id'=> 'dev-css' )) !!}
    <!--[if LTE IE 8]>
    {!! HTML::style('assets/styles/minimal-menu-ie.css',array('id'=> 'dev-css' )) !!}
    <![endif]-->
    {!! HTML::style('assets/styles/flat-form.css',array('id'=> 'dev-css' )) !!}
    {!! HTML::style('assets/styles/fancySelect.css',array('id'=> 'dev-css' )) !!}
    {!! HTML::style('assets/styles/jquery.fancybox.css',array('id'=> 'dev-css' )) !!}
    {!! HTML::style('assets/styles/allinone_bannerRotator.css',array('id'=> 'dev-css' )) !!}
    {!! HTML::style('assets/styles/owl.carousel.css',array('id'=> 'dev-css' )) !!}
    {!! HTML::style('assets/styles/owl.theme.default.min.css',array('id'=> 'dev-css' )) !!}
    {!! HTML::style('assets/styles/styles1.css',array('id'=> 'dev-css' )) !!}
    {!! HTML::style('assets/styles/style.css',array('id'=> 'dev-css' )) !!}
    {!! HTML::script('assets/scripts/libs/prefixfree.min.js') !!}
    {!! HTML::script('assets/scripts/libs/modernizr.js') !!}
    <!--[if lt IE 9]>
    {!! HTML::script('assets/scripts/libs/html5shiv.js') !!}
    {!! HTML::script('assets/scripts/libs/respond.js') !!}
    <![endif]-->

</head>
<body class="home1">
<header class="main-header">
    <div class="container">
        <div class="logo">
            {!! HTML::image('image/ne-image/logo-green.png', 'img', array('class' => 'img-responsive','width'=>'500px')) !!}
<!--            <img src="../image/ne-image/logo-green.png" class="img-responsive" style="width: 500px;">-->
        </div>
    </div>
    <!-- /.header-social -->
    <!-- /.top-cart -->
    <div class="container-fluid">
        <nav class="main-nav nt-main-nav">
            <div class="minimal-menu" id="accordion">
                <ul class="menu nt-menu">
                    <li class="current-menu-item ">
                        <a class="index" href="{{ url('/home') }}">HOME</a>
                    </li>
                    <li>
                        <a href="{{ url('/aboutus') }}">ABOUT US</a>
                    </li>
                    <li>
                        <a href="{{url('/categories/MAN')}}">PRODUCTS</a>
                    </li>
                    <li>
                        <a href="{{url('/contact')}}" >CONTACT US</a>
                    </li>
                    <!--                    <li class="hidden-xs">-->
                    <!--                        <div class="wrap-search nt-wrap-search">-->
                    <!--                            <form action="#" class="search-form nt-search-form">-->
                    <!--                                <input type="text" placeholder="Search.." />-->
                    <!--                                <button type="submit"><i class="pe-7s-search"></i></button>-->
                    <!--                            </form>-->
                    <!--                        </div>-->
                    <!-- /.search-form -->
                    <!--                    </li>-->
                </ul>
            </div>
            <!-- /.minimal-menu -->
        </nav>
        <!-- /.main-nav -->
    </div>
</header>
@yield('content')
<!-- /.locations -->
<footer style="background-color: #333">
    <div class="container " >
        <div class="row">

            <div class="col-md-6 col-sm-6 col-md-offset-2" style="color: white!important">
                <h3 style="color: white!important">Branch Location</h3>
                <div class="addre" style="color: white!important">House #192 (Ground Floor), Road # 02 DOHS, Baridahara, Dhaka, Bangladesh</div>
                <p style="color: white!important">Mobile: +8801774556777, +8801743206606</p>
                <p style="color: white!important">Email. <a href="">info@nexttrendbd.com</a></p>
                <ul class="list-social" >
                    <ul class="list-social">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="linked"><i class="fa fa-linkedin"></i></a></li>
                        <!--                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>-->
                        <!--<li><a href="#" class="behance"><i class="fa fa-behance"></i></a></li>-->
                    </ul>
                </ul>
                <!-- /.list-social -->
            </div>
            <div class="col-md-4 col-sm-4">
                <h3>COMPANY</h3>
                <ul class="list-link">
                    <li><a href="{{ url('/aboutus') }}">ABOUT US</a></li>
                    <li><a href="{{url('/categories/MAN')}}">PRODUCTS</a></li>
                    <li><a href="{{url('/contact')}}">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="bottom-footer">
                    <div class="copyright">
                        ©COPYRIGHT {{ Date('Y') }}.All Rights Reserved
                    </div>
                </div>
            </div>
            <!-- /.copyright -->
            <!--                    <ul class="list-payment">
                                    <li><a href="#"><img src="assets/images/visa.png" alt="img" /></a></li>
                                    <li><a href="#"><img src="assets/images/paypal.png" alt="img" /></a></li>
                                    <li><a href="#"><img src="assets/images/2co.png" alt="img" /></a></li>
                                    <li><a href="#"><img src="assets/images/ae.png" alt="img" /></a></li>
                                    <li><a href="#"><img src="assets/images/skrill.png" alt="img" /></a></li>
                                    <li><a href="#"><img src="assets/images/gw.png" alt="img" /></a></li>
                                    <li><a href="#"><img src="assets/images/wu.png" alt="img" /></a></li>
                                </ul>-->
            <div class="col-md-6 col-sm-6">
                <div class=" pull-right" style="display: inline-block; margin-top: 50px; text-align: center;">

                    Developed by: <a href="http://belogin.com/">Belogin Technologies Ltd.</a>

                </div>
            </div>
            <!-- /.list-payment -->

        </div>
    </div>
</footer>
{!! HTML::script('assets/scripts/libs/jquery-1.11.2.min.js') !!}
{!! HTML::script('assets/scripts/libs/jquery-ui-1.11.4/jquery-ui.min.js') !!}
{!! HTML::script('assets/scripts/libs/jquery.easing.1.3.js') !!}
{!! HTML::script('assets/scripts/libs/bootstrap.min.js') !!}
{!! HTML::script('assets/scripts/libs/fancySelect.js') !!}
{!! HTML::script('assets/scripts/libs/jquery.fancybox.pack.js') !!}
{!! HTML::script('assets/scripts/libs/jquery.ui.touch-punch.min.js') !!}
{!! HTML::script('assets/scripts/libs/jquery.mousewheel.min.js') !!}
{!! HTML::script('assets/scripts/libs/allinone_bannerRotator.js') !!}
{!! HTML::script('assets/scripts/libs/owl.carousel.min.js') !!}
{!! HTML::script('assets/scripts/libs/jquery.countdown.min.js') !!}
{!! HTML::script('assets/scripts/functions.js') !!}
<script type="text/javascript">
    $(document).ready(function () {
        $("#accordion").removeClass("active1");
        $('.index').addClass('active1');
    });
</script>

</body>
</html>