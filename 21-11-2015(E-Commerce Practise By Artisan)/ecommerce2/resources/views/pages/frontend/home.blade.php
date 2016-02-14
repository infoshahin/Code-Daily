@extends('layouts.frontend.frontend')
@section('content')
<body class="home1 ">
<!--<div class="topbar tab2">-->
<!--    <div class="container">-->
<!--        <div class="left-topbar">-->
<!--            WELCOME GUEST! <a href="login-register2.html">LOG IN</a> OR <a href="login-register2.html">REGISTER</a>-->
<!--        </div>-->
        <!-- /.left-topbar -->
<!--        <div class="right-topbar">-->
<!--            <ul class="list-inline">-->
<!--                <li>-->
<!--                    <div class="btn-group">-->
<!--                        <button class="dropdown dropdown-toggle" data-toggle="dropdown">-->
<!--                            <span>My Settings</span>-->
<!--                            <i class="pe-7s-angle-down"></i>-->
<!--                        </button>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li>-->
<!--                                <a href="wishlist.html"><i class="fa fa-heart"></i> Wish List (0)</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i> Shopping Cart</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="check-out.html"><i class="fa fa-share"></i> Checkout</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </li>-->
<!--        </div>-->
<!--        <li>-->
            <!--                            <form action="#">
                                            <div class="btn-group">
                                                <button class="dropdown dropdown-toggle" data-toggle="dropdown">
                                                    <span>Language:</span>
                                                    en
                                                    <i class="pe-7s-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#"><img src="../../../../public/assets/images/flags/United-Kingdom.png" alt="English" title="English"/> English</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="../../../../public/assets/images/flags/France.png" alt="France" title="France"/> France</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </li>
                                    <li>-->
            <!--                            <form action="#">
                                            <div class="btn-group">
                                                <button class="dropdown dropdown-toggle" data-toggle="dropdown">
                                                    <span>Currency:</span>
                                                    USD
                                                    <i class="pe-7s-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#">€ Euro</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">£ Pound Sterling</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">$ US Dollar</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>-->
<!--        </li>-->
<!--        </ul>-->
<!--    </div>-->
    <!-- /.right-topbar -->
<!--</div>-->
<!--</div>-->
<!-- /.topbar -->
<hr class="gray-line" />
<header>
<div class="container">
<a class="logo" href="{{ url('/home') }}"style="margin-top: -20px;">
    {!! HTML::image('image/artisan%20logo.png', 'a picture', array('width' => '140px')) !!}
</a>
<!-- /.logo -->
<div class="header-social">
    <ul class="list-social">
        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" class="twitter"><i class="fa fa-linkedin"></i></a></li>
<!--        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>-->
<!--        <li><a href="#" class="vk"><i class="fa fa-vk"></i></a></li>-->
        <!--<li><a href="#" class="behance"><i class="fa fa-behance"></i></a></li>-->
    </ul>
    <!-- /.list-social -->
</div>
<!-- /.header-social -->

    <!--<div class="top-cart">-->
    <!--    <a href="shopping-cart2.html">-->
    <!--        <i class="pe-7s-cart"></i>-->
    <!--        <span>2</span>-->
    <!--    </a>-->
    <!--</div>-->

<!-- /.top-cart -->
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
<div class="slideshow">
    <div id="slideshow1">
        <ul class="allinone_bannerRotator_list">
            <li data-text-id="#content_ss_1">{!! HTML::image('assets/images/slideshow1.jpg', 'a picture') !!}</li>
            <li data-text-id="#content_ss_2">{!! HTML::image('assets/images/slideshow2.jpg', 'a picture') !!}</li>
            <li data-text-id="#content_ss_3">{!! HTML::image('assets/images/slideshow3.jpg', 'a picture') !!}</li>
        </ul>
    </div>
</div>
<!-- /.slideshow -->

<section id="about-section">
    <div class="container-fluid">
        <div class="row">
            <h3>Company History</h3>
            <div class="about-text">
                <p >
                    The name Artisan comes from Latinword Artifexits meaning Craftsman or skilled worker and outfitters means someone who sells clothing.
                    ARTISAN Outfitters Ltd is one of the best leading 100% export and as well assome own manufacture oriented products showrooms in Bangladesh. It is ideally located in the Dhaka city and also in Chittagong.
                </p>
                <div class="text-box"style="font-size: 25px;
                         font-size: 1.5em;
                         font-weight: normal;
                         letter-spacing: 3px;
                         margin: 0px 0px 10px;
                         text-align: center;
                         background-color: #00923F;
                         width: 200PX;
                         padding: 10px;
                         color: white;
                         text-align: center;
                         position: relative;
                         top: 60%;
                         left: 44%;
                         ">
                    <a href="{{ url('/aboutus') }}" style="color: white">MORE DETAILS</a>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="features">
    <div class="container-fluid" style="padding:150px">
        <div class="row">
            @foreach($categories as $value)
            <div class="col-md-3 ">
                <div class="sale">
                    <a href="{{ url('/category/'.$value->id) }}">
                        <div class="text-box"style="font-size: 25px;
                                 font-size: 1.5em;
                                 font-weight: normal;
                                 letter-spacing: 3px;
                                 margin: 0px 0px 10px;
                                 text-align: center;">
                            {{$value->title}}
                        </div>
                        <div class="icon-box">
                            <!--                                    <i class="pe-7s-cart"></i>-->
                            {!! HTML::image('image/avatar23.png', 'a picture', array('width' => '40px')) !!}
<!--                            <img src="../../../../public/image/avatar23.png" width="40px;">-->
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- /.features -->
<section>

</section>

<div class="trending-clothing" >
<div class="container">
<h3>TRENDY CLOTHING</h3>
<h5>Trending</h5>
<div id="carousel-1">
<div class="tab-heading tab2">
    @foreach($categories as $value)
    <span>{{$value->title}}</span>
    @endforeach
</div>
<div class="box-content">
<div class="showcase">
    <div class="row">
        <div class="box-product">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/team-img-3.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/team-img-3.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/team-img-3.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/team-img-3.jpg" alt="img" />-->
                            </a>
                        </div>
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">HANDMADE FLARED JACKET</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item has-deal">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="single-product.html">
                                {!! HTML::image('assets/images/product-img-5-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-5-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="single-product.html">
                                {!! HTML::image('assets/images/product-img-5-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-5-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <!--<div class="countdown" data-time="2015/09/06"></div>-->
                        <!--                                                <div class="product-sale">
                                                                            -25%
                                                                        </div>-->
                        <a href="detail_page.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">COAT WITH WOOL WRAPAROUND COLLAR</a></h4>
                    <p class="product-price">
                        <ins><span class="amount">100.99 USD</span></ins>
                        <del><span class="amount">189.99 USD</span></del>
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item has-deal">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-2-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-2-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-2-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-2-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <!--<div class="countdown" data-time="2015/09/06"></div>-->
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">UTILITY JACKET</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-4.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-4.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-4-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-4-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">ANIMAL PRINT COAT</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="showcase">
    <div class="row">
        <div class="box-product">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-2.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-2.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-2-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-2-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <!--                                                <div class="product-new">
                                                                            NEW
                                                                        </div>-->
                        <!--                                                <div class="product-sale">
                                                                            -25%
                                                                        </div>-->
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">COAT WITH WOOL WRAPAROUND COLLAR</a></h4>
                    <p class="product-price">
                        <ins><span class="amount">100.99 USD</span></ins>
                        <del><span class="amount">189.99 USD</span></del>
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-1.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-1.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-1-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-1-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <a href="detail_page.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page.html">HANDMADE FLARED JACKET</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-3.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-3.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-3-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-3-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">UTILITY JACKET</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-4.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-4.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-4-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-4-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">ANIMAL PRINT COAT</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="showcase">
    <div class="row">
        <div class="box-product">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-1.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-1.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-1-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-1-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">HANDMADE FLARED JACKET</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>

                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-3.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-3.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-3-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-3-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="single-product2.html">UTILITY JACKET</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-2.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-2.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-2-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-2-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <!--                                                <div class="product-new">
                                                                            NEW
                                                                        </div>-->
                        <!--                                                <div class="product-sale">
                                                                            -25%
                                                                        </div>-->
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">COAT WITH WOOL WRAPAROUND COLLAR</a></h4>
                    <p class="product-price">
                        <ins><span class="amount">100.99 USD</span></ins>
                        <del><span class="amount">189.99 USD</span></del>
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-4.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-4.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-4-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-4-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">ANIMAL PRINT COAT</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="showcase">
    <div class="row">
        <div class="box-product">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-4.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-4.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="single-product.html">
                                {!! HTML::image('assets/images/product-img-4-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-4-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">ANIMAL PRINT COAT</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-1.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-1.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-1-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-1-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">HANDMADE FLARED JACKET</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-2.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-2.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-2-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-2-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <!--                                                <div class="product-new">
                                                                            NEW
                                                                        </div>-->
                        <!--                                                <div class="product-sale">
                                                                            -25%
                                                                        </div>-->
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">COAT WITH WOOL WRAPAROUND COLLAR</a></h4>
                    <p class="product-price">
                        <ins><span class="amount">100.99 USD</span></ins>
                        <del><span class="amount">189.99 USD</span></del>
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-3.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-3.jpg" alt="img" />-->
                            </a>
                        </div>
                        <div class="overlay-img">
                            <a href="detail_page2.html">
                                {!! HTML::image('assets/images/product-img-3-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-3-thumb.jpg" alt="img" />-->
                            </a>
                        </div>
                        <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="detail_page2.html">UTILITY JACKET</a></h4>
                    <p class="product-price">
                        189.99 USD
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                        </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- /.trending-clothing -->
<!--<div class="custom-boxes">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-6">-->
<!--                <div class="fashion-store">-->
<!--                    <a href="shop-with-sidebar.html">-->
<!--                        <h3>-->
<!--                            ZORKA<br />-->
<!--                            FASHION<br />-->
<!--                            STORE-->
<!--                        </h3>-->
<!--                        <div class="overlay"></div>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--                <div class="day-off">-->
<!--                    <a href="shop-with-sidebar.html">-->
<!--                        <div class="media">-->
<!--                            <div class="media-left">-->
<!--                                <i class="pe-7s-anchor"></i>-->
<!--                            </div>-->
<!--                            <div class="media-body">-->
<!--                                <h3>50% OFF</h3>-->
<!--                                <h5>EVERY TUESDAY</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="overlay"></div>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- /.custom-boxes -->
<div class="sale-off">
<div class="container">
<div class="tab2">
    <h3>NEW ARRIVALS</h3><br>
</div>
    <div class="clearfix"></div>
<!--<h5>Up to 50%</h5>-->
<div id="carousel-2">
<div class="box-content">





<?php $i=1;
    $j = 4;
foreach($products as $values)
{

if($i==1 || $i == $j)
{
    echo '<div class="showcase"><div class="row"><div class="box-product">';
//    echo $i.'||';
//    echo $i.'=='.$j.'<br>';

}
//    echo $i.'-0<br>';
//    echo $i.'--'.$i%4;
?>

    <?php
        // echo $i.'!='.$j.'<br>';
    ?>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="product-item">
            <div class="product-thumb">
                <div class="main-img">
                    <a href="detail_page2.html">
                        {!! HTML::image('assets/images/product-img-5.jpg', 'a picture', array('class' => 'img-responsive')) !!}
                        <!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-5.jpg" alt="img" />-->
                    </a>
                </div>
                <div class="overlay-img">
                    <a href="detail_page2.html">
                        {!! HTML::image('assets/images/product-img-5-thumb.jpg', 'a picture', array('class' => 'img-responsive')) !!}
                        <!--                                <img class="img-responsive" src="../../../../public/assets/images/product-img-5-thumb.jpg" alt="img" />-->
                    </a>
                </div>
                <!--                                                <div class="product-sale">
                                                                    -25%
                                                                </div>-->
                <a href="detail_page2.html" class="details"><i class="pe-7s-search"></i></a>
            </div>
            <h4 class="product-name"><a href="detail_page2.html">HOODED BOMBER JACKET</a></h4>
            <p class="product-price">
                <ins><span class="amount">100.99 USD</span></ins>
                <del><span class="amount">189.99 USD</span></del>
            </p>
            <div class="group-buttons">
                <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                    <span>Add to Cart</span>
                </button>
                <!--                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                    <i class="pe-7s-repeat"></i>
                                                                </button>-->
                <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                    <i class="pe-7s-like"></i>
                </button>
            </div>
        </div>
    </div>



<?php
if($i==1 || $i == $j){
//{
    echo '</div></div></div>';
    if($i == $j){
        $j = $j+4;
    }
}
    $i++;
}
?>



</div>

    <div class="clearfix"></div>
<div class="nav">
    <span class="prev"><i class="fa fa-angle-left"></i></span>
    <span class="next"><i class="fa fa-angle-right"></i></span>
</div>
</div>
</div>
</div>
<!--start kids section-->
<section id="item">
    <div class="container ">
        <div class="row">
            <div class="col-xs-12 col-md-12  ">
                <div class="thumbnai text-center ">
                    <h3 class="tab2" >Accessories</h3>
                    <h5>It is a long established fact that.It is a long established fact that It is a long established fact that</h5>
                    <a href="category-3.html"><button type="button" class="btn btn-lg get ">Shop Now</button></a>
                    <br><br><br>
                    {!! HTML::image('image/13581-women-s-accessories-spring-2013.jpg', 'a picture', array('class' => 'img-responsive')) !!}
<!--                    <img src="../../../../public/image/13581-women-s-accessories-spring-2013.jpg" class="img-responsive">-->
                </div>
            </div>
        </div
    </div>
</section>
<br>  <br>  <br>  <br>

<!-- /.brand-logos -->
<hr class="gray-line" />
<!--<div class="locations">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-4">-->
<!--                <div class="media">-->
<!--                    <div class="media-left">-->
<!--                        <i class="pe-7s-alarm"></i>-->
<!--                    </div>-->
<!--                    <div class="media-body">-->
<!--                        <h4>OPENING ALL WEEK</h4>-->
<!--                        <h5>8AM : 8PM</h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <div class="media">-->
<!--                    <div class="media-left">-->
<!--                        <i class="pe-7s-medal"></i>-->
<!--                    </div>-->
<!--                    <div class="media-body">-->
<!--                        <h4>25% OFF WOMEN T-SHIRT</h4>-->
<!--                        <h5>On order over 500USD</h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <div class="media">-->
<!--                    <div class="media-left">-->
<!--                        <i class="pe-7s-world"></i>-->
<!--                    </div>-->
<!--                    <div class="media-body">-->
<!--                        <h4>FREE SHIP ALL ORDER</h4>-->
<!--                        <h5>Worldwide shipping</h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
</body>
@stop