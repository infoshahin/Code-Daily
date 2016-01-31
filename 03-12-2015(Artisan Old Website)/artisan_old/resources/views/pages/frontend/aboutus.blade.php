@extends('layouts.frontend.frontend')
@section('title', 'About Us')
@section('content')
<body class="home1 ">
<header>
<div class="container">
<a class="logo" href="Home _page .html" style="margin-top: -20px;">
    <img src="image/artisan logo.png" width="140px" alt="img"/>
</a>
<!-- /.logo -->
<div class="header-social">
    <ul class="list-social">
        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" class="twitter"><i class="fa fa-linkedin"></i></a></li>
    </ul>
    <!-- /.list-social -->
</div>
<!-- /.header-social -->
    <nav class="main-nav">
        <div class="minimal-menu" style="padding: 30px">
            <ul class="menu">

                <li class="current-menu-item">
                    <a href="{{ url('/home') }}">HOME</a>
                </li>
                <li>
                    <a href="{{url('/category/MAN')}}">MAN</a>
                </li>
                <li>
                    <a href="{{url('/category/WOMAN')}}">WOMAN</a>
                </li>
                <li>
                    <a href="{{url('/category/KIDS')}}">KIDS</a>
                </li>
                <li>
                    <a href="{{url('/category/EXCLUSIVE')}}">EXCLUSIVE</a>
                </li>
                <li><a href="{{ url('/aboutus') }}">ABOUT US</a></li>
                <li><a href="{{url('/contact')}}">CONTACT</a></li>
                <!--<li class="hidden-xs">-->
                <!--    <div class="wrap-search">-->
                <!--        <form action="#" class="search-form">-->
                <!--            <input type="text" placeholder="Search.." />-->
                <!--            <button type="submit"><i class="pe-7s-search"></i></button>-->
                <!--        </form>-->
                <!--    </div>-->
                <!--    <!-- /.search-form -->-->
                <!--</li>-->
            </ul>
        </div>
        <!-- /.minimal-menu -->
    </nav>
    <!-- /.main-nav -->
</div>
</header>
<div class="contact-content">

    <div class="container-fluid" style="margin-top: 35px;">
        <h3 style="text-transform: uppercase">Company History</h3>
        <p style="color: #666;
                   /*display: inline-block;*/
                   line-height: 2;
                   margin-bottom: 10px;
                   letter-spacing: 1px;
                   width: 100%;">
            The name Artisan comes from Latinword Artifexits meaning Craftsman or skilled worker and outfitters means someone who sells clothing. ARTISAN Outfitters Ltd is one of the best leading 100% export and as well assome own manufacture oriented products showrooms in Bangladesh. It is ideally located in the Dhaka city and also in Chittagong.
            Artisan was established in 2007 with one shop at Gulshan-1 niketon then gradually today reached to 9 outlets. All showrooms are in very prime locations and with huge space and we have more than
            400 hundred staffs in our all showrooms and in our small Factory. Now we have updated manufacturing equipment, advanced technology and modern management system. It has been corporate setup in private limited company.
        <h3 style="padding-top: 10px;">Our Strategy and work force Management Policy</h3>
        The major strength is its management; we want our employees to feel challenges and make a meaningful commitment to the company through their individual contribution. In today’s industry we strongly believe that “Our Product is our Success”. Our mission statement is: Quality in all aspect is the driving force of our operations’. Persistence and development ensure quality enhancement and complete customer satisfaction.
        <br><br><h3> Work Force</h3>Now our workforce is over 400 people which includes 9 outlets and one factory. In Showrooms dress code and discipline for our people is Mandatory. 100% free from child labor.
        </p>
        <h3 style="text-transform: uppercase">Management Profile</h3>
        <p style="color: #666;
                   /*display: inline-block;*/
                   line-height: 2;
                   margin-bottom: 10px;
                   letter-spacing: 1px;
                   width: 100%; list-style: l">Anita Gomes is the Chairperson of ARTISAN outfitters Ltd. She is one of the sailors of this company who has embedded a culture of sales and service. She is very gratified of the fact that in recent years Artisan has given the best awards to many best employees of all Outlets with Crazes and Gifts as well as. And given a good amount of money to the staffs who passed 5 years of their working experience in Artisan.Anita says “We believe in "Best Customers service" and in being transparent with our customers & with our people. She is responsible for guiding and managing all operations, finance & administrative activities. Demonstrating great leadership skills and driving high performing teams, she has been successfully executing strategies and contributing to the overall success of the company. She is concern of continuous development of Capacity Planning & Work Measurement so that all of her workers can reach at top of their efficiency. Though profit is the concern but Anita’s main concern is the compliance.
            Apart from being a business personality Anita is highly associated with philanthropic activities. Anita believes business is for the development for society.
            Ali AhammadRaselis the Managing Director of the company. He spent many years in related our company in outside and later established Artisan with His Wife (Anita Gomes CP) the family business. Over the years she has got an exertion on Outlets. Mr. Rasel works with the Suppliers and do all procurements with His big QC teams and one of His primary goal is to derive customer’s satisfaction with best quality products and with best customers Service. He is aligned with the management team to provide comprehensive buying, sourcing & product development services, with a guarantee of quality, competitive pricing, compliance and world class service. Mr. Rasel says “Our goal is to serve our customers professionally, and with best service and best quality of service. His main theme is "Service First".
        </p>
    </div>
</div>
</body>
@stop