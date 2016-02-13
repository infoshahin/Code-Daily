<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewreport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom-styles.css">

    <link rel="stylesheet" type="text/css" href="css/cs-slider.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.3.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        body{
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    @yield('homeheader')
    @yield('aboutusheader')
    @yield('serviceheader')
    @yield('portfolioheader')
    @yield('contactheader')
    @yield('emptyheader')
    @yield('home')
    @yield('aboutus')
    @yield('service')
    @yield('portfolio')
    @yield('contact')
    @yield('empty')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script  src="js/bootstrap.min.js"></script>
<!--isotope script-->
<script src="js/isotope-docs.min.js"></script>
<!--slide script-->
<script src="js/jquery.cslider.js"></script>
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<!--custom script-->
<script src="js/script.js"></script>
<!--scroll top-->
<script type="text/javascript" src="js/move-top.js"></script>
<!--scroll Animation-->
<script type="text/javascript" src="js/wow.min.js"></script>
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

</script>

</body>
</html>