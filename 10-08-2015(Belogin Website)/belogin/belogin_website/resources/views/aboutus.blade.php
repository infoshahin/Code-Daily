@extends('master')

@section('title', 'About Us')


@section('aboutus')

<div id="wrapper">   

<!--/. NAV TOP  -->
<nav id="navbar2" class="navbar-default navbar-side" role="navigation">
<div class="" >
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" id="navbar-toggle" data-toggle="collapse" data-target=".col1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                         <a class="navbar-brand" href="{{URL::to('/aboutus')}}"></a>
                    </div><!--end navbar header-->
    <div class="sidebar-collapse col1">
        <ul class="nav" id="main-menu">

            <li>
                <a class="active-menu" href="{{URL::to('/aboutus')}}"><i class="fa fa-dashboard"></i> About Us</a>
            </li>
            <li>
                <a href="{{URL::to('/mission')}}"><i class="fa fa-desktop"></i> Mission & Vision</a>
            </li>
            <li>
                <a href="{{URL::to('/motto')}}"><i class="fa fa-bar-chart-o"></i> Motto</a>
            </li>
            <li>
                <a href="{{URL::to('/clientvalue')}}"><i class="fa fa-qrcode"></i> Client Value</a>
            </li>

            <li>
                <a href="{{URL::to('/globalconnection')}}"><i class="fa fa-table"></i> Global Connection</a>
            </li>
<!--            <li>-->
<!--                <a href="form.html"><i class="fa fa-edit"></i> Forms </a>-->
<!--            </li>-->


            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Speech<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{URL::to('/chairmanspeech')}}">Chairman's Speech</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/mdspeech')}}">Managing Director's Speech</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/ceospeech')}}">CEO's Speech</a>
                    </li>
<!--                    <li>-->
<!--                        <a href="#">Second Level Link<span class="fa arrow"></span></a>-->
<!--                        <ul class="nav nav-third-level">-->
<!--                            <li>-->
<!--                                <a href="#">Third Level Link</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Third Level Link</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Third Level Link</a>-->
<!--                            </li>-->
<!---->
<!--                        </ul>-->
<!---->
<!--                    </li>-->
                </ul>
            </li>
<!--            <li>-->
<!--                <a href="empty"><i class="fa fa-fw fa-file"></i> Empty Page</a>-->
<!--            </li>-->
        </ul>

    </div>
       </div>

</nav>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
    <div class="col-md-12">
<!--        <h1 class="page-header">-->
<!--            About-->
<!--            <small>       Belogin Technologies Ltd.</small>-->
<!--        </h1>-->
    </div>
</div>
<!-- /. ROW  -->

<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
<div class="panel-heading">
    <h2>About Us</h2>
</div>
<div class="panel-body">
<div class="table-responsive">
<p>
    <p >Belogin Technologies Ltd. spreads knowledge of information and technology through its excellences. It has its identity in serving the valuable clients superior quality products and services. Corporate clients find Belogin Technologies Ltd. trustworthy due to its commitment and dedication. Belogin Technologies Ltd. treats all the stakeholders equally with equity.</p>
    <p>Belogin Technologies Ltd. has started its journey on October 17, 2014. It focuses on developing IT based products and services from the very beginning of its journey and these products and services are getting global application.
    Appropriate products and services along with the superior quality and the standard pricing made Belogin Technologies Ltd. desired one to the valued customers in the arena of Information and Technology. All the professionals of Belogin Technologies Ltd. are highly aware of their responsibilities towards the industry and the society as well.
    The following reasons have been playing the vital role to provide the superior quality products and services with least price:
   <ul style="list-style-type:square">
        <li>• Smart professionalism of the employees</li>
        <li>• Keeping the  high confidentiality and security of customers' data</li>
        <li>• Competence of working in both web and mobile platform</li>
        <li>• Creating customer confidence through trustworthiness</li>
    </ul>
</p>



</p>
</div>

</div>
</div>
<!--End Advanced Tables -->
</div>
</div>

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Service Providing Areas</h2>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <p>Belogin Technologies Ltd. provides the services in the following areas:</p>
                        <ul style="list-style-type:disc">
                            <li><h3>• Financial Institution</h3></li>
                            <p>To accelerate the financial growth and to cope up with global financial system, all financial institutions have been taking advantage of using compatible software. The more use of software, the more accuracy and authenticity in calculation. We provide both specific and custom financial software and services for Banks, Insurances, Leasing Organizations and other financial entities to ensure the institutions’ ultimate growth.</p>
                            <li><h3>• SME and Chain Shop</h3></li>
                            <p>The working domain and the customer base of Small and Medium Enterprises and Chain Shops have been increasing day by day. It is very important to deal with that customer base in the dimensional ways since all the customers are different. Use of technology like, more customer oriented software, Digital Marketing can be influential in this regard. We provide all the necessary software and services to facilitate the businesses along with their supply chain management.</p>
                            <li><h3>• Food and Restaurant</h3></li>
                            <p>Food and Restaurant businesses are the finest business in the contemporary time if it is done in the modern way. Customers are random and their loyalty towards the restaurant would be dependent on the digital services like Digital Marketing, Online food order etc. We have every potential to provide all the necessary software and services which will add value to the customers services.</p>
                            <li><h3>• Education</h3></li>
                            <p>Both traditional and non-traditional education requires both information through the assistance of technology and the technology oriented devices to go further and faster. Modern education system needs technology based education to cope up with the competitive world. We are with you to assist you getting the necessary and time worthy technological solution at the even pace.</p>
                            <li><h3>• Tourism and Transportation</h3></li>
                            <p>The promotion of tourism helps to attract people in all the way. Tourism industry incorporates accommodation facilities, transportation, travel agent and tour operators. To charm the tourists either from local or foreign, every tourism entity should be technologically smart and versatile in operation. If you are a tourism entity, Belogin Technologies Ltd. should be the right choice for you as we have been providing essential software and applications for the well-defined tourism entities.</p>
                            <li><h3>• Medical</h3></li>
                            <p>Hospitals should be well equipped and the activities of the hospitals should quickly be responsive to serve the patients at an earliest time. The use of required software helps the hospitals and medical bodies to get the technological orientation which facilitates them to promote their services. We have the expertise to provide all the necessary software and applications for hospitals and medical bodies.</p>
                            <li><h3>• Corporate and Industrial Sector</h3></li>
                            <p>Today’s corporate world is much smarter and dimensional than ever before due to its connections with the global technology. More technology oriented industries and corporate offices shines and sustains most than the others and it is proved. We have core competency to provide both specialized software and custom software which will be built according to the demand of the valuable clients.</p>
                            <li><h3>• E - Commerce</h3></li>
                            <p>E-Commerce has been the most emerging marketing phenomenon in the modern global arena. Taking the advantage of globalization, e-Commerce gets take off and going to be more popular within the next decade. Belogin Technologies Ltd. believes in e-Commerce and its widespread application. We have all the potentials to build any form of e-Commerce solutions.</p>
                        </ul>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Services</h2>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <b><ul style="list-style-type:square">
                            <li>• Enterprise Resource Planning</li>
                            <li>• Education Management System</li>
                            <li>• E-Commerce Solutions</li>
                            <li>• Website Development</li>
                            <li>• Digital Marketing</li>
                            <li>• Mobile Apps Development</li>
                            <li>• Graphic Designing </li>
                        </ul></b>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>
<!-- /. ROW  -->
</div>
    </div>
    </div>
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>
@endsection