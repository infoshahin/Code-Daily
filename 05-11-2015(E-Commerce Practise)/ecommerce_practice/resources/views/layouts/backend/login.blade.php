<?php echo
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>        
        <!-- meta section -->
       <title>{{ trans('lang.home') }}</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <!-- /meta section -->        
        
        <!-- css styles -->
        {!! HTML::style('css/blue-white.css', array('id'=> 'dev-css' )) !!}   
        <!-- ./css styles -->                                    
                
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/dev-other/dev-ie-fix.css">
        <![endif]-->
        
        <!-- javascripts -->
       {!! HTML::script('js/plugins/modernizr/modernizr.js') !!}   
        <!-- ./javascripts -->
        
        <style>
        .dev-page{visibility: hidden;}
        .dev-page.dev-page-login .dev-page-login-block__logo {   
            height: 65px;  
        }
        .dev-page .dev-page-header .dph-logo a {
           height: 46px;
        }
</style>
    </head>
    <body>
                
       @yield('content')

        <!-- ./page wrapper -->                
        
        <!-- javascript -->
            {!! HTML::script('js/plugins/jquery/jquery.min.js') !!}  
         {!! HTML::script('js/plugins/bootstrap/bootstrap.min.js') !!}        
        <!-- ./javascript -->
    </body>
</html>






