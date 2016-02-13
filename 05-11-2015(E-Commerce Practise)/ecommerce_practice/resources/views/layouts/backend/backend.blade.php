<?php echo
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>        
        <!-- meta section -->
       
        <title>Smart Study</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <!-- ./meta section -->
        
        <!-- css styles -->
         {!! HTML::style('css/blue-white.css', array('id'=> 'dev-css' )) !!}
        <!-- ./css styles -->                                     
        
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/dev-other/dev-ie-fix.css">
        <![endif]-->

        <!-- javascripts -->

<!--         {!! HTML::script('js/plugins/modernizr/modernizr.js') !!}-->

        <!-- ./javascripts -->
        <style>
            .dev-page{visibility: hidden;}            
        </style>
    </head>
    <body>
        <!-- set loading layer -->
        <div class="dev-page-loading preloader"></div>
        <!-- ./set loading layer -->       
        
        <!-- page wrapper -->
        <div class="dev-page">
            
            <!-- page header -->    
            <div class="dev-page-header">
                
                <div class="dph-logo">
                    <a href="index-2.html">Intuitive</a>
                    <a class="dev-page-sidebar-collapse">
                        <div class="dev-page-sidebar-collapse-icon">
                            <span class="line-one"></span>
                            <span class="line-two"></span>
                            <span class="line-three"></span>
                        </div>
                    </a>
                </div>

                <ul class="dph-buttons pull-right">                    
                    <li class="dph-button-stuck">
                        <a href="#" class="dev-page-search-toggle">
                            <div class="dev-page-search-toggle-icon">
                                <span class="circle"></span>
                                <span class="line"></span>
                            </div>
                        </a>
                    </li>                    
                    <li class="dph-button-stuck">
                        <a href="#" class="dev-page-rightbar-toggle">
                            <div class="dev-page-rightbar-toggle-icon">
                                <span class="line-one"></span>
                                <span class="line-two"></span>
                            </div>
                        </a>
                    </li>
                </ul>                                                
                
            </div>
            <!-- ./page header -->
            
            <!-- page container -->
            <div class="dev-page-container">

                <!-- page sidebar -->
                <div class="dev-page-sidebar">
                    
                    <ul class="dev-page-navigation">
                        <li class="title">Navigation</li>
                        <li class="active">
                            <a href="{{URL::to('admin-home')}}"><i class="fa fa-desktop"></i> <span>Dashboard</span></a>
                        </li>                        
                        <li>
                            <a href="#"><i class="fa fa-file-o"></i> <span>Pages</span></a>
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                    <ul>
                                        <li><a href="{{URL::to('admin-history')}}">History</a></li>
                                        <li><a href="{{URL::to('admin-executive-body')}}">Executive Body</a></li>
                                        <li><a href="{{URL::to('principal-speech')}}">Principal's Speech</a></li>
                                        <li><a href="{{URL::to('image')}}">Image Gallery</a></li>
                                        <li><a href="{{URL::to('sliderimage')}}">Slider Image Gallery</a></li>
                                        <li><a href="{{URL::to('weblink')}}">Web Link</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Notice & Events</a>
                                    <ul>
                                        <li><a href="{{URL::to('notice')}}">Notice</a></li>
                                        <li><a href="{{URL::to('event')}}">Events</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{URL::to('career')}}">Career Details</a></li>
<!--                                <li>-->
<!--                                    <a href="#">Login Forms</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="pages-login.html" target="_blank">Login</a></li>-->
<!--                                        <li><a href="pages-login-lite.html" target="_blank">Login Lite</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">Registration Forms</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="pages-registration.html" target="_blank">Registration</a></li>-->
<!--                                        <li><a href="pages-registration-lite.html" target="_blank">Registration Lite</a></li>-->
<!--                                    </ul>-->
<!--                                </li>                                -->
<!--                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>                                -->
<!--                                <li><a href="pages-session-timeout.html">Session Timeout</a></li>-->
<!--                                <li><a href="pages-edit-profile.html">Edit Profile</a></li>-->
<!--                                <li><a href="pages-profile.html">Profile</a></li>-->
<!--                                <li><a href="pages-faq.html">FAQ</a></li>-->
<!--                                <li><a href="pages-gallery.html">Gallery</a></li>-->
<!--                                <li><a href="pages-tocify.html">Tocify</a></li>-->
<!--                                <li><a href="pages-invoice.html">Invoice</a></li>-->
<!--                                <li><a href="pages-error-404.html">Error 404</a></li>                                -->
<!--                                <li><a href="pages-contacts.html">Contacts</a></li>-->
                            </ul>
                        </li>                        
<!--                        <li>-->
<!--                            <a href="#"><i class="fa fa-cube"></i> <span>Layouts</span></a>-->
<!--                            <ul>                                -->
<!--                                <li><a href="layout-boxed.html">Boxed</a></li>-->
<!--                                <li><a href="layout-no-footer.html">No Footer</a></li>-->
<!--                                <li><a href="layout-fixed-footer.html">Fixed Footer</a></li>-->
<!--                                <li><a href="layout-footer-collapsed.html">Footer Collapsed</a></li>-->
<!--                                <li><a href="layout-nav-minimized.html">Minimized Navigation</a></li>                                -->
<!--                                <li><a href="layout-nav-collapsed.html">Collapsed Navigation</a></li>-->
<!--                                <li><a href="layout-nav-right.html">Navigation Right</a></li>-->
<!--                            </ul>-->
<!--                        </li>       -->
<!--                        <li>-->
<!--                            <a href="features.html"><i class="fa fa-globe"></i> <span>Features List</span></a>-->
<!--                        </li>-->
<!--                        <li class="title">Components</li>-->
<!--                        <li>-->
<!--                            <a href="#"><i class="fa fa-cogs"></i> <span>UI Kits</span></a>-->
<!--                            <ul>                                -->
<!--                                <li><a href="ui-elements.html">UI Elements</a></li>-->
<!--                                <li><a href="ui-widgets.html">Widgets</a></li>-->
<!--                                <li><a href="ui-buttons.html">Buttons</a></li>-->
<!--                                <li><a href="ui-modals.html">Modals & Popups</a></li>-->
<!--                                <li><a href="ui-panels.html">Panels</a></li>-->
<!--                                <li><a href="ui-typography.html">Typography</a></li>-->
<!--                                <li><a href="ui-icons.html">Icons</a></li>-->
<!--                                <li><a href="ui-tour.html">Tour</a></li>-->
<!--                                <li><a href="ui-slide-menu.html">Sliding Menu</a></li>-->
<!--                                <li><a href="ui-sliders.html">Sliders</a></li>-->
<!--                                <li><a href="ui-nestable.html">Nestable List</a></li>-->
<!--                                <li><a href="ui-tree-view.html">Tree View</a></li>-->
<!--                                <li><a href="ui-language.html">Change Language</a></li>-->
<!--                                <li>-->
<!--                                    <a href="#">Timeline</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="ui-timeline-simple.html">Simple Timeline</a></li>-->
<!--                                        <li><a href="ui-timeline.html">Timeline</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#"><i class="fa fa-pencil"></i> <span>Forms</span></a>-->
<!--                            <ul>-->
<!--                                <li><a href="form-elements.html">Form Elements</a></li>-->
<!--                                <li><a href="form-layouts.html">Form Layouts</a></li>-->
<!--                                <li><a href="form-wizard.html">Form Wizard</a></li>-->
<!--                                <li><a href="form-validation.html">Form Validation & Helpers</a></li>-->
<!--                                <li><a href="form-editors.html">WYSIWYG Editors</a></li>                                -->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="charts.html"><i class="fa fa-line-chart"></i> <span>Charts</span></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#"><i class="fa fa-table"></i> <span>Tables</span></a>-->
<!--                            <ul>-->
<!--                                <li><a href="tables-static.html">Static Tables</a></li>-->
<!--                                <li><a href="tables-sortable.html">Sortable Tables</a></li>-->
<!--                                <li><a href="tables-other.html">Other Features</a></li>-->
<!--                            </ul>-->
<!--                        </li>                        -->
<!--                        <li>-->
<!--                            <a href="#"><i class="fa fa-code-fork"></i> <span>Multi-Level Navigation</span></a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Second Level</a></li>-->
<!--                                <li>-->
<!--                                    <a href="#">Second Level</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="#">Third Level</a></li>-->
<!--                                        <li><a href="#">Third Level</a></li>-->
<!--                                        <li><a href="#">Third Level</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a href="#">Second Level</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
                    </ul>
                    
                </div>
                <!-- ./page sidebar -->
                
                <!-- page content -->
               @yield('content')
                <!-- ./page content -->                                               
            </div>  
            <!-- ./page container -->
            
            <!-- right bar -->
            <div class="dev-page-rightbar">
                <div class="rightbar-chat">

                    <div class="rightbar-chat-frame-contacts scroll">
                        <div class="rightbar-title">
                            <h3>Messages</h3>
                            <a href="#" class="btn btn-default btn-rounded rightbar-close pull-right"><span class="fa fa-times"></span></a>
                        </div>
                        <ul class="contacts">
                            <li class="title">online</li>
                            <li>
                                <a href="#" class="status online">
                                    <img src="assets/images/users/user_1.jpg" title="Aqvatarius"> John Doe                                            
                                </a>
                            </li>                                    
                            <li>
                                <a href="#" class="status online">
                                    <img src="assets/images/users/user_2.jpg" title="Aqvatarius"> Shannon Freeman                                            
                                </a>
                            </li>
                            <li>
                                <a href="#" class="status away">
                                    <img src="assets/images/users/user_3.jpg" title="Aqvatarius"> Devin Stephens                                            
                                </a>
                            </li>                                    
                            <li>
                                <a href="#" class="status away">
                                    <img src="assets/images/users/user_4.jpg" title="Aqvatarius"> Marissa George                                           
                                </a>
                            </li>
                            <li>
                                <a href="#" class="status dont">
                                    <img src="assets/images/users/user_5.jpg" title="Aqvatarius"> Sydney Reeves                                           
                                </a>
                            </li>
                            <li class="title">offline</li>
                            <li>
                                <a href="#" class="status">
                                    <img src="assets/images/users/user_6.jpg" title="Aqvatarius"> Kaitlynn Bowen                                           
                                </a>
                            </li>
                            <li>
                                <a href="#" class="status">
                                    <img src="assets/images/users/user_7.jpg" title="Aqvatarius"> Karen Spencer                                            
                                </a>
                            </li>
                            <li>
                                <a href="#" class="status">
                                    <img src="assets/images/users/user_8.jpg" title="Aqvatarius"> Darrell Wolfe                                            
                                </a>
                            </li>                                    
                        </ul>
                    </div>

                    <div class="rightbar-chat-frame-chat">
                        <div class="user">
                            <div class="user-panel">
                                <a href="#" class="btn btn-default btn-rounded rightbar-chat-close"><span class="fa fa-angle-left"></span></a>
                                <a href="#" class="btn btn-default btn-rounded pull-right"><span class="fa fa-user"></span></a>
                            </div>
                            <div class="user-info">
                                <div class="user-info-image status online">
                                    <img src="assets/images/users/user_1.jpg">
                                </div>
                                <h5>Devin Stephens</h5>
                                <span>UI/UX Designer</span>
                            </div>
                        </div>
                        <div class="chat-wrapper scroll">
                            <ul class="chat" id="rightbar_chat">
                                <li class="inbox">
                                    Hi, you have a second? Need to ask you something.
                                    <span>about 1h ago</span>
                                </li>                                    
                                <li class="sent">
                                    Sure i have...
                                    <span>59min ago</span>
                                </li>
                                <li class="inbox">
                                    It's about latest design you did...
                                    <span>14min ago</span>
                                </li>
                                <li class="sent">
                                    I will do my best to help you
                                    <span>2min ago</span>
                                </li>
                            </ul>
                        </div>

                        <form class="form" action="#" method="post" id="rightbar_chat_form">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default"><i class="fa fa-paperclip"></i></button>
                                    </div>
                                    <input type="text" class="form-control" name="message">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            <!-- ./right bar -->
            
            <!-- page footer -->    
            <div class="dev-page-footer dev-page-footer-fixed"> <!-- dev-page-footer-closed dev-page-footer-fixed -->
                <ul class="dev-page-footer-controls">
<!--                    <li><a class="tip" title="Settings"><i class="fa fa-cogs"></i></a></li>-->
<!--                    <li><a class="tip" title="Support"><i class="fa fa-life-ring"></i></a></li>-->
                    <li><a class="tip" href="{{URL::to('logout')}}" title="Logoff"><i class="fa fa-power-off"></i></a></li>
                   
                    <li class="pull-right">
                        <a class="dev-page-sidebar-minimize tip" title="Toggle navigation"><i class="fa fa-outdent"></i></a>
                    </li>
                </ul>
                
                <!-- page footer buttons -->
<!--                <ul class="dev-page-footer-buttons">                    -->
<!--                    <li><a href="#footer_content_1" class="dev-page-footer-container-open"><i class="fa fa-database"></i></a></li>                    -->
<!--                    <li><a href="#footer_content_2" class="dev-page-footer-container-open"><i class="fa fa-bar-chart"></i></a></li>-->
<!--                    <li><a href="#footer_content_3" class="dev-page-footer-container-open"><i class="fa fa-server"></i></a></li>-->
<!--                </ul>-->
                <!-- ./page footer buttons -->
                <!-- page footer container -->
                <div class="dev-page-footer-container">
                    
                    <!-- loader and close button -->
                    <div class="dev-page-footer-container-layer">
                        <a href="#" class="dev-page-footer-container-layer-button"></a>
                    </div>
                    <!-- ./loader and close button -->                    
                    
                    <!-- informers -->
                    <div class="dev-page-footer-container-content" id="footer_content_1">                        
                        <div class="dev-list-informers">                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#E74E40" value="33" data-angleArc="250" data-angleOffset="-125" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Disk Usage</h5>
                                    <p>Server #1 - <strong>235,4Gb / 500Gb</strong></p>
                                    <p>Server #2 - <strong>114,2Gb / 500Gb</strong></p>
                                    <p class="text-higlight">33% - Total disk usage</p>
                                </div>
                            </div>
                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#85d6de" value="75" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Database Usage</h5>
                                    <p>Disk Space - <strong>64,3Gb / 100Gb</strong></p>
                                    <p>Accounts - <strong>12 / 30</strong></p>
                                    <p class="text-higlight">75% - Features usage</p>
                                </div>
                            </div>
                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#82b440" value="62" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Memory Usage</h5>
                                    <p>Total - <strong>2048Mb</strong></p>
                                    <p>Cached - <strong>1291Mb</strong></p>
                                    <p>Available - <strong>757Mb</strong></p>
                                </div>
                            </div>                            
                        </div>                        
                    </div>
                    <!-- ./informers -->
                    
                    <!-- informers -->
                    <div class="dev-page-footer-container-content" id="footer_content_2">                        
                        <div class="dev-list-informers">                            
                            <div class="dev-list-informers-item dev-list-informers-item-extended">
                                <div class="chart">
                                    <span class="sparkline" sparkType="bar" sparkBarColor="#82b440" sparkWidth="150" sparkHeight="100" sparkBarWidth="15">5,4,3,2,4,5,6,7,8,6,4,5</span>
                                </div>
                                <div class="info">
                                    <h5>Visitors</h5>
                                    <p>New - <strong>722</strong></p>
                                    <p>Returned - <strong>230</strong></p>
                                    <p class="text-higlight">Total - <strong>952</strong></p>
                                </div>
                            </div>                            
                            
                            <div class="dev-list-informers-item dev-list-informers-item-extended">
                                <div class="chart">
                                    <span class="sparkline" sparkFillColor="#85d6de" sparkLineWidth="2" sparkLineColor="#85d6de" sparkWidth="200" sparkHeight="100" >5,4,3,2,4,5,6,7,8,6,4,5</span>
                                </div>
                                <div class="info">
                                    <h5>Sales</h5>
                                    <p>Total Sales - 35</p>
                                    <p>Rate - 25</p>
                                    <p class="text-higlight">Ratio - <strong>75%</strong></p>
                                </div>
                            </div>
                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <span class="sparkline" sparkType="pie" sparkWidth="100" sparkHeight="100" >3,7</span>
                                </div>
                                <div class="info">
                                    <h5>User Stats</h5>
                                    <p>Registrated - 1,522</p>
                                    <p>Not active - 316</p>
                                    <p class="text-higlight">Total - <strong>1,838</strong></p>
                                </div>
                            </div>                            
                        </div>                        
                    </div>
                    <!-- ./informers -->
                    
                    <!-- projects -->
                    <div class="dev-page-footer-container-content" id="footer_content_3">                        
                        <ul class="dev-list-projects">
                            <li><a href="#" class="active">Intuitive</a></li>
                            <li><a href="#">Atlant</a></li>
                            <li><a href="#">Gemini</a></li>
                            <li><a href="#">Taurus</a></li>
                            <li><a href="#">Leo</a></li>
                            <li><a href="#">Aries</a></li>
                            <li><a href="#">Virgo</a></li>
                            <li><a href="#">Aquarius</a></li>
                            <li><a href="#" class="dev-list-projects-add"><i class="fa fa-plus"></i></a></li>
                        </ul>                        
                    </div>
                    <!-- ./projects -->
                </div>
                <!-- ./page footer container -->
                
                <ul class="dev-page-footer-controls dev-page-footer-controls-auto pull-right">
                    <li><a class="dev-page-footer-fix tip" title="Fixed footer"><i class="fa fa-thumb-tack"></i></a></li>
                    <li><a class="dev-page-footer-collapse dev-page-footer-control-stuck"><i class="fa fa-dot-circle-o"></i></a></li>
                </ul>
            </div>
            <!-- ./page footer -->
            
            <!-- page search -->
            <div class="dev-search">
                <div class="dev-search-container">
                    <div class="dev-search-form">
                    <form action="http://aqvatarius.com/themes/intuitive/index.html" method="post">
                        <div class="dev-search-field">
                            <input type="text" placeholder="Search..." value="Nature">
                        </div>                        
                    </form>
                    </div>
                    <div class="dev-search-results"></div>
                </div>
            </div>
            <!-- page search -->            
        </div>
        <!-- ./page wrapper -->

        <!-- javascript -->

        {!! HTML::script('js/plugins/jquery/jquery.min.js') !!}
        {!! HTML::script('js/plugins/bootstrap/bootstrap.min.js') !!}
        {!! HTML::script('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') !!}
        {!! HTML::script('js/plugins/moment/moment.js') !!}
        {!! HTML::script('js/bootstrap-datetimepicker.js') !!}
        {!! HTML::script('js/plugins/knob/jquery.knob.min.js') !!}
        {!! HTML::script('js/plugins/sparkline/jquery.sparkline.min.js') !!}
        {!! HTML::script('js/plugins/bootstrap-select/bootstrap-select.js') !!}
        {!! HTML::script('js/plugins/nvd3/d3.min.js') !!}
        {!! HTML::script('js/plugins/nvd3/nv.d3.min.js') !!}
        {!! HTML::script('js/plugins/nvd3/lib/stream_layers.js') !!}
        {!! HTML::script('js/plugins/waypoint/waypoints.min.js') !!}
        {!! HTML::script('js/plugins/counter/jquery.counterup.min.js') !!}
        {!! HTML::script('js/dev-settings.js') !!}
        {!! HTML::script('js/dev-loaders.js') !!}
        {!! HTML::script('js/dev-layout-default.js') !!}
        {!! HTML::script('js/demo.js') !!}
        {!! HTML::script('js/dev-app.js') !!}
        {!! HTML::script('js/demo-dashboard.js') !!}
        {!! HTML::script('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') !!}
        {!! HTML::script('js/plugins/datatables/jquery.dataTables.min.js') !!}
        {!! HTML::script('js/plugins/sortable/sortable.min.js') !!}
        <!-- javascripts -->

        {!! HTML::script('js/plugins/modernizr/modernizr.js') !!}
        <!-- ./javascripts -->
         <script src="//cdn.ckeditor.com/4.5.2/standard/ckeditor.js"></script>
        //     <script>
        //     CKEDITOR.replace( 'sd' );
        // </script>
        //  <script>
        //     CKEDITOR.replace( 'sdf' );
        // </script>
        <!-- ./javascript -->
    </body>

<!-- Mirrored from aqvatarius.com/themes/intuitive/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 05:46:10 GMT -->
</html>






