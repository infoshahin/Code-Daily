<!DOCTYPE html>
<html lang="en">

<head>
    <!--Basic page needs-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Mobile specific metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,400,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--Fonts awesome icon-->
    {!! HTML::style('css/font-awesome-4.5.0/css/font-awesome.min.css') !!}
<!--    <link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.min.css"/>-->
    <!--fonts material icon-->
    {!! HTML::style('css/material-design-iconic-font/css/material-design-iconic-font.css') !!}
<!--    <link rel="stylesheet" href="css/material-design-iconic-font/css/material-design-iconic-font.css"/>-->
    <!--Bootstrap CSS-->
    {!! HTML::style('css/bootstrap.min.css') !!}
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <!--style CSS-->
    {!! HTML::style('css/style.css') !!}
<!--    <link href="css/style.css" rel="stylesheet">-->
    <!--forum CSS-->
    {!! HTML::style('css/forum.css') !!}
<!--    <link href="css/forum.css" rel="stylesheet">-->
    <!--forum CSS-->
    {!! HTML::style('css/form.css') !!}
<!--    <link href="css/form.css" rel="stylesheet">-->
    <!--fancybox CSS-->
    {!! HTML::style('css/jquery.fancybox.css', array('media'=> 'screen' )) !!}
<!--    <link href="css/jquery.fancybox.css" rel="stylesheet" media="screen">-->
    <!--btn CSS-->
    {!! HTML::style('css/btn_style.css') !!}
<!--    <link href="css/btn_style.css" rel="stylesheet">-->
    <!--slicknav CSS-->
    {!! HTML::style('css/slicknav.css') !!}
<!--    <link href="css/slicknav.css" rel="stylesheet">-->
    <!--slicknav CSS-->
    {!! HTML::style('css/normalize.css') !!}
<!--    <link href="css/normalize.css" rel="stylesheet">-->
    <!--responsive CSS-->
    {!! HTML::style('css/responsive.css') !!}
<!--    <link href="css/responsive.css" rel="stylesheet">-->


</head>
<body>
<div class="wrapper-top visible-xs">
    <ul class="menu-xs pull-right">
        <li><a href="{{ url('/login') }}" class="login-header">LOGIN</a></li>
        <li><a href="{{ url('/register') }}" class="register-header">REGISTER</a></li>
    </ul>
</div>
<div class="wrapper-forum">
    <!--top bar-->
    <div class="hd-top-bar ">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <a href="{{ url('/home') }}" class="logo-brand">
                        {!! HTML::image('image/logo.png', '', array('class' => 'retina img-responsive')) !!}
                    </a>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12 hidden-xs">
                    <ul class="top-link pull-right">
                        <li><a href="{{ url('/login') }}" class="login-header">Login</a></li>
                        <li><a href="{{ url('/register') }}" class="register-header">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--top bar-->

<!--header start-->
<header id="header-forum" >
    <div class="header">
        <div class="container mainmenu">
            <div class="bg-section">
                <!--top search -->
                <div class="col-md-4 col-xs-12 col-sm-10">
                    <!--                        <div class="search">
                                                <form class="" role="search">
                                                    <div class="input-group ">
                                                        <input type="text" class="form-control search-box" placeholder="Search" name="q">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-default search-text-btn" type="submit">SEARCH</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>-->
                </div>
                <!--top search end-->
                <!--top btn start-->
                <div class="col-md-4 col-md-offset-4 col-xs-12 col-sm-12 ">
                    <div class="fo-header-button pull-right">
                        <a href="{{ url('/gossip') }}"><button type="button" class="btn btn-main fo-btn-header btn-lg raised pull-right">post your one for review</button></a>
                    </div>
                </div>
                <!--top btn end-->
            </div>
        </div>
    </div>
</header>

@yield('content')

<!--

        Footer
-->                <section id="footer" style="position: relative;">
<!--    <div class="footer_top">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-4 col-sm-6 col-xs-12">-->
<!--                    <h4 class="menu_head">About Us</h4>-->
<!--                    <div class="footer_menu">-->
<!--                        <ul>-->
<!--                            <li><a href="#">About Us</a></li>-->
<!--                            <li><a href="#">Terms of Service</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 col-xs-12">-->
<!--                    <h4 class="menu_head">Help & Support</h4>-->
<!--                    <div class="footer_menu">-->
<!--                        <ul>-->
<!--                            <li><a href="#">Privacy Policy</a></li>-->
<!--                            <li><a href="#">FAQ</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 col-xs-12">-->
<!--                    <h4 class="menu_head">Contact us</h4>-->
<!--                    <div class="footer_menu_contact">-->
<!--                        <ul>-->
<!--                            <li><span> +880-1824143370</span></li>-->
<!--                            <li>-->
<!--                                <span> info@mail.com</span></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="footer_b">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_bottom">
                        <p class="text-block">  Powered by <span><a href="http://www.belogin.com/">Belogin Technologies Ltd.</a></span></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_mid pull-right">
                        <ul class="social-contact list-inline">
                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-rss"></i></a></li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"> <i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section><!--
         Footer Area End -->

<div id="back-top">
    <a href="#About" class="scroll" data-scroll>
        <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
    </a>
</div>


<!-- jQuery -->
{!! HTML::script('js/jquery.js') !!}
<!--<script src="js/jquery.js"></script>-->
<!-- Bootstrap js -->
{!! HTML::script('js/bootstrap.min.js') !!}
<!--<script src="js/bootstrap.min.js"></script>-->
<!--style js-->
{!! HTML::script('js/style.js') !!}
<!--<script src="js/style.js"></script>-->
<!--fancybox js-->
{!! HTML::script('js/jquery.fancybox.pack.js') !!}
<!--<script src="js/jquery.fancybox.pack.js"></script>-->
<!--slicknav js-->
{!! HTML::script('js/jquery.slicknav.min.js') !!}
<!--<script src="js/jquery.slicknav.min.js"></script>-->
<!--slide js-->
{!! HTML::script('js/jssor.slider.mini.js') !!}
<!--<script src="js/jssor.slider.mini.js"></script>-->
<!--scroll up js-->
{!! HTML::script('js/jquery.scrollTo.js') !!}
<!--<script type="text/javascript" src="js/jquery.scrollTo.js"></script>-->
<script>
    $('#menu-list').slicknav({
        closeOnClick:'false',
        prependTo:'.main-menu'
    });


</script>

</body>
</html>