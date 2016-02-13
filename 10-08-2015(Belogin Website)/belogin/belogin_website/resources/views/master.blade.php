<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ asset('logofev.ico') }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {!! HTML::style('css/bootstrap-3.3.2/css/bootstrap.min.css') !!}
        {!! HTML::style('css/custom.css') !!}
        {!! HTML::style('css/cs-slider.css') !!}
        {!! HTML::style('css/animate.css')!!}
        {!! HTML::style('css/font-awesome-4.3.0/css/font-awesome.min.css') !!}
           <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
         <!-- Bootstrap Styles-->
        {!! HTML::style('assets/css/bootstrap.css') !!}
        {!! HTML::style('assets/css/custom-styles.css') !!}
         <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

        <style type="text/css">

         body{
                overflow-x: hidden;

            }
           /* footer{
                background:#ffab62;
    width:100%;
    height:100px;
    position:absolute;
    bottom:0;
    left:0;
            }*/
            html,
body {
    margin:0;
    padding:0;
    height:100%;
}
#wrapper {
    min-height:100%;
    position:relative;
}
#content {
    padding-bottom:100px; /* Height of the footer element */
}
.visible-sm {
display: block !important;
visibility: visible !important;
}
#navbar2 {z-index:999;}
#header_two{
    padding-top: 0px;
}
.activementu{
    background-color: white;
}
@media only screen and (max-width: 500px) {
   #header_two{
    padding-top: 28px;
}

.slogan{
    background-color: red;
    overflow: hidden;
}


}

            
        </style>
        <style>
    .scrolloff {
        pointer-events: none;
    }
</style>

    </head>
<body>

<div class="wrapper">
        <header id="header">
            <nav id="navbar1" class="navbar  navbar-default menu-bar" role="navigation">
                <div class="container" >
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" id="navbar-toggle" data-toggle="collapse" data-target="">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{URL::to('/home')}}"><img src="images/beloginlogo white.png"></a>
                    </div><!--end navbar header-->
                    <div class="" id="sidebar">
                        <h4 class="sidbar-header">NAVIGATION</h4>
                        <ul class="nav navbar-nav menu pull-right">
                            <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{URL::to('/home')}}">HOME</a></li>
                            <li class="{{ Request::is('aboutus') ? 'active' : '' }}"><a href="{{URL::to('/aboutus')}}">ABOUT</a></li>
                            <li class="{{ Request::is('portfolio') ? 'active' : '' }}"><a href="{{URL::to('/portfolio')}}">PORTFOLIO</a></li>
                            <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="{{URL::to('/service')}}">SERVICE</a></li>
                            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{URL::to('/contact')}}">CONTACT</a></li>
                        </ul>
                    </div><!--end sidebar-->
                </div><!--end container-->
            </nav><!--end nav-->
        </header>
 <div id="content">
    @yield('home')
    @yield('aboutus')
    @yield('service')
    @yield('portfolio')
    @yield('contact')
    </div>
     </div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $('#mapcustom').addClass('scrolloff');                // set the mouse events to none when doc is ready
        
        $('#googleMap').on("mouseup",function(){          // lock it when mouse up
            $('#mapcustom').addClass('scrolloff');    //somehow the mouseup event doesn't get call...
        });
        $('#googleMap').on("mousedown",function(){        // when mouse down, set the mouse events free
            $('#mapcustom').removeClass('scrolloff');
        });

        $("#mapcustom").mouseleave(function () {
                 // becuase the mouse up doesn't work... 
            $('#mapcustom').addClass('scrolloff');    // set the pointer events to none when mouse leaves the map area
                                                        // or you can do it on some other event
        });
        
    });

</script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        {!! HTML::script('js/bootstrap.min.js') !!}
        <!--isotope script-->
        {!! HTML::script('js/isotope-docs.min.js') !!}
        <!--slide script-->
        {!! HTML::script('js/jquery.cslider.js') !!}

        {!! HTML::script('js/modernizr.custom.28468.js') !!}
        <!--custom script-->
        {!! HTML::script('js/script.js') !!}
        <!--scroll top-->
        {!! HTML::script('js/move-top.js') !!}
        <!--scroll Animation-->
        {!! HTML::script('js/wow.min.js') !!}
        <script>
            wow = new WOW(
                {
                    boxClass: 'wow',
                    animateClass: 'animated',
                    offset: 0,
                    mobile: true,
                    live: true
                }
            );
            wow.init();
$('.carousel').carousel({
  interval: 1000 * 3
});




        </script>

    </body>
</html>