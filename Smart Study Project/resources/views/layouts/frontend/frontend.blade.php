<?php echo
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<!-- Mirrored from themes.3rdwavemedia.com/college-green/1.5.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Aug 2015 06:35:41 GMT -->
<head>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
    <!-- Global CSS -->
     {!! HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') !!}       
     
    <!-- Plugins CSS -->    
    {!! HTML::style('assets/plugins/font-awesome/css/font-awesome.css') !!}     
     {!! HTML::style('assets/plugins/flexslider/flexslider.css') !!} 
       {!! HTML::style('assets/plugins/pretty-photo/css/prettyPhoto.css') !!} 
 
    <!-- Theme CSS -->  
    
       {!! HTML::style('assets/css/styles.css') !!} 
    <!-- 
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css"> -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    body{
        background-color: #daf2cd;
    }
    .header .top-bar {
    background: white;
}
.main-nav {
    background: #007700;
    margin-bottom: 30px;
}
.footer {
    background: #007700;
    color: #fff;
}
/*.main-nav .nav .nav-item.active > a {
    background: red;
    color: #fff;
}*/
.home-page section {
    background: #FFFF;
    overflow: hidden;
    margin-bottom: 30px;
}
/*.footer .bottom-bar {
    background: #dadada;
    padding: 5px 0;
}*/
.box.box-dark {
    background: #007700;
    color: #fff;
}
a.btn-cta, .btn-cta {
    background: #D1B315;
    color: #fff;
    padding: 10px 20px;
    font-size: 18px;
    line-height: 1.33;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
    border-radius: 0;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #D1B315;
    font-family: 'open sans', arial, sans-serif;
}
.home-page h1.section-heading .line {
    border-top: 2px solid #D1B315;
    display: inline-block;
    padding: 0 15px;
    padding-top: 5px;
}
.btn-theme {
    background: #D1B315;
    border: 1px solid #D1B315;
    color: #fff;
}
.date-label .month {
    background: #D1B315;
    color: #fff;
    display: block;
    font-size: 13px;
    text-transform: uppercase;
}
#topcontrol {
    background: #27ae60;
}
.flexslider .slides .flex-caption .main {    
    background: #D1B315;  
}
</style>
</head> 

<body class="home-page">
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header">  
            <div class="top-bar">
                <div class="container">              
                    <ul class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">
                        <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>         
                        <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>             
                    </ul><!--//social-icons-->
                    <form class="pull-right search-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search the site...">
                        </div>
                        <button type="submit" class="btn btn-theme">Go</button>
                    </form>         
                </div>      
            </div><!--//to-bar-->
            <div class="header-main container">
                <h1 class="logo col-md-4 col-sm-4">
                    <a href="index-2.html">{!! HTML::image('assets/images/school2.png', 'Logo', array('id' => 'logo')) !!}</a>
                </h1><!--//logo-->           
                <div class="info col-md-8 col-sm-8">
                    <ul class="menu-top navbar-right hidden-xs">
                        <li class="divider"><a href="index-2.html">{{ trans('lang.home') }}</a></li>
                        <li class="divider"><a href="faq.html">{{ trans('lang.faq') }}</a></li>
                        <li><a href="contact.html">{{ trans('lang.contact') }}</a></li>
                    </ul><!--//menu-top-->
                    <br />
                    <div class="contact pull-right">
                        <p class="phone"><i class="fa fa-phone"></i>{{ trans('lang.call') }}</p> 
                        <p class="email"><i class="fa fa-envelope"></i><a href="#">enquires@website.com</a></p>
                    </div><!--//contact-->
                </div><!--//info-->
            </div><!--//header-main-->
        </header><!--//header-->
        
        <!-- ******NAV****** -->
        <nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a href="{{URL::to($lang.'/home')}}">{{ trans('lang.home') }}</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">{{ trans('lang.aboutus') }} <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL::to($lang.'/history')}}">{{ trans('lang.aboutus_history') }}</a></li>
                                <li><a href="{{URL::to($lang.'/executive-body')}}">{{ trans('lang.executive') }}</a></li>
                                <li><a href="course-single-2.html">Single Course (with video)</a></li>  
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Menu Levels <i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">Submenu Level 2</a></li>
                                        <li class="dropdown-submenu">
                                            <a class="trigger" href="#">Submenu Level 2 <i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Submenu Level 3</a></li>
                                                <li><a href="#">Submenu Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level 2</a></li>
                                        <li><a href="#">Submenu Level 2</a></li>
                                    </ul>
                                </li>           
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">{{ trans('lang.news') }} <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="news.html">News List</a></li>
                                <li><a href="news-single.html">Single News (with image)</a></li>   
                                <li><a href="news-single-2.html">Single News (with video)</a></li>          
                            </ul>
                        </li>
                        <li class="nav-item"><a href="events.html">{{ trans('lang.event') }}</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">{{ trans('lang.result') }} <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Leadership Team</a></li>
                                <li><a href="jobs.html">Jobs</a></li>
                                <li><a href="job-single.html">Single Job</a></li>
                                <li><a href="gallery.html">Gallery (3 columns)</a></li>
                                <li><a href="gallery-2.html">Gallery (4 columns)</a></li>
                                <li><a href="gallery-3.html">Gallery (2 columns)</a></li>
                                <li><a href="gallery-4.html">Gallery (with sidebar)</a></li>
                                <li><a href="gallery-album.html">Single Gallery</a></li>
                                <li><a href="gallery-album-2.html">Single Gallery (with sidebar)</a></li>
                                <li><a href="faq.html">FAQ</a></li>                                
                                <li><a href="privacy.html">Privacy Policy</a></li> 
                                <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>                   
                            </ul>
                        </li><!--//dropdown-->
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">{{ trans('lang.students') }} <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html"><i class="fa fa-file-text"></i> Typography</a></li>
                                <li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
                                <li><a href="buttons.html"><i class="fa fa-star"></i> Buttons</a></li>
                                <li><a href="components.html"><i class="fa fa-rocket"></i> Components</a></li> 
                                <li><a href="icons.html"><i class="fa fa-heart"></i> Icons</a></li>                                                 
                            </ul>
                        </li><!--//dropdown-->
                        <li class="nav-item"><a href="contact.html">{{ trans('lang.contact') }}</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->
        
        <!-- ******CONTENT****** --> 

        @yield('content')

        <!--//content-->
    </div><!--//wrapper-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                <div class="footer-col col-md-3 col-sm-4 about">
                    <div class="footer-col-inner">
                        <h3>About</h3>
                        <ul>
                            <li><a href="about.html"><i class="fa fa-caret-right"></i>About us</a></li>
                            <li><a href="contact.html"><i class="fa fa-caret-right"></i>Contact us</a></li>
                            <li><a href="privacy.html"><i class="fa fa-caret-right"></i>Privacy policy</a></li>
                            <li><a href="terms-and-conditions.html"><i class="fa fa-caret-right"></i>Terms & Conditions</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="footer-col col-md-6 col-sm-8 newsletter">
                    <div class="footer-col-inner">
                        <h3>Join our mailing list</h3>
                        <p>Subscribe to get our weekly newsletter delivered directly to your inbox</p>
                        <form class="subscribe-form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email" />
                            </div>
                            <input class="btn btn-theme btn-subscribe" type="submit" value="Subscribe">
                        </form>
                        
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col--> 
                <div class="footer-col col-md-3 col-sm-12 contact">
                    <div class="footer-col-inner">
                        <h3>Contact us</h3>
                        <div class="row">
                            <p class="adr clearfix col-md-12 col-sm-4">
                                <i class="fa fa-map-marker pull-left"></i>        
                                <span class="adr-group pull-left">       
                                    <span class="street-address">College Green</span><br>
                                    <span class="region">56 College Green Road</span><br>
                                    <span class="postal-code">BS16 AP18</span><br>
                                    <span class="country-name">UK</span>
                                </span>
                            </p>
                            <p class="tel col-md-12 col-sm-4"><i class="fa fa-phone"></i>0800 123 4567</p>
                            <p class="email col-md-12 col-sm-4"><i class="fa fa-envelope"></i><a href="#">enquires@website.com</a></p>  
                        </div> 
                    </div><!--//footer-col-inner-->            
                </div><!--//foooter-col-->   
                </div>   
            </div>        
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @ 2015 College Green Online | Website template by <a href="#">3rd Wave Media</a></small>
                    <ul class="social pull-right col-md-6 col-sm-12 col-xs-12">
                        <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" ><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" ><i class="fa fa-skype"></i></a></li> 
                        <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>
                    </ul><!--//social-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
    
    <!-- *****CONFIGURE STYLE****** -->  
    <div class="config-wrapper hidden-xs">
        <div class="config-wrapper-inner">
            <a id="config-trigger" class="config-trigger" href="#"><i class="fa fa-cog"></i></a>
            <div id="config-panel" class="config-panel">
                <p>Choose Colour</p>
                <ul id="color-options" class="list-unstyled list-inline">
                    <li class="default active" ><a data-style="assets/css/styles.css" data-logo="assets/images/logo.png" href="#"></a></li>
                    <li class="green"><a data-style="assets/css/styles-green.css" data-logo="assets/images/logo-green.png" href="#"></a></li>
                    <li class="purple"><a data-style="assets/css/styles-purple.css" data-logo="assets/images/logo-purple.png" href="#"></a></li>
                    <li class="red"><a data-style="assets/css/styles-red.css" data-logo="assets/images/logo-red.png" href="#"></a></li>
                </ul><!--//color-options-->
                <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
            </div><!--//configure-panel-->
        </div><!--//config-wrapper-inner-->
    </div><!--//config-wrapper-->
 
    <!-- Javascript -->          

       {!! HTML::script('assets/plugins/jquery-1.11.2.min.js') !!} 
       {!! HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js') !!} 
       {!! HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') !!} 
       {!! HTML::script('assets/plugins/bootstrap-hover-dropdown.min.js') !!} 
       {!! HTML::script('assets/plugins/back-to-top.js') !!} 
       {!! HTML::script('assets/plugins/jquery-placeholder/jquery.placeholder.js') !!} 
       {!! HTML::script('assets/plugins/pretty-photo/js/jquery.prettyPhoto.js') !!} 
       {!! HTML::script('assets/plugins/flexslider/jquery.flexslider-min.js') !!} 
       {!! HTML::script('assets/plugins/jflickrfeed/jflickrfeed.min.js') !!} 
       {!! HTML::script('assets/js/main.js') !!} 
    
</body>


</html> 

