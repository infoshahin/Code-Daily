@extends('layouts.frontend.frontend')
@section('title', 'Categories')
@section('content')
<body class="home1">
<div class="topbar tab2">
    <div class="container">
        <div class="left-topbar">
            WELCOME GUEST! <a href="login-register2.html">LOG IN</a> OR <a href="login-register2.html">REGISTER</a>
        </div>
        <!-- /.left-topbar -->
        <div class="right-topbar">
            <ul class="list-inline">
                <li>
                    <div class="btn-group">
                        <button class="dropdown dropdown-toggle" data-toggle="dropdown">
                            <span>My Settings</span>
                            <i class="pe-7s-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="wishlist.html"><i class="fa fa-heart"></i> Wish List (0)</a>
                            </li>
                            <li>
                                <a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i> Shopping Cart</a>
                            </li>
                            <li>
                                <a href="check-out.html"><i class="fa fa-share"></i> Checkout</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <!--                            <form action="#">
                                                    <div class="btn-group">
                                                        <button class="dropdown dropdown-toggle" data-toggle="dropdown">
                                                            <span>Language:</span>
                                                            en
                                                            <i class="pe-7s-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="#"><img src="assets/images/flags/United-Kingdom.png" alt="English" title="English"/> English</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><img src="assets/images/flags/France.png" alt="France" title="France"/> France</a>
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
                </li>
            </ul>
        </div>
        <!-- /.right-topbar -->
    </div>
</div>
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
                    <!--     /.search-form -->
                    <!--</li>-->
                </ul>
            </div>
            <!-- /.minimal-menu -->
        </nav>
        <!-- /.main-nav -->
    </div>
</header>
<div class="main">
<div class="container">
<div class="header-page tab2">
    <h1>SHOP</h1>
</div>
<br><br>
<!-- /.header-page -->
<div class="row">
<div class="col-md-3">
    <div class="sidebar">
        <!--                            <aside class="widget">
                                        <h4 class="widget-title">FILTER BY PRICE</h4>
                                        <div class="options-price">
                                            <div id="price-slider"></div>
                                            <div class="price-range">
                                                <label for="amount">PRICE:</label>
                                                <input type="text" id="amount" readonly />
                                            </div>
                                            <button class="filter-price-btn">Filter</button>
                                        </div>
                                    </aside>-->
        <aside class="widget">
            <h4 class="widget-title">CATEGORY</h4>
            <ul class="ul-sidebar">
                @foreach($categories as $values)
                <li>
                    <a href="{{ url('/category/'.$values->id) }}">
                        {{ $values->title }}
                    </a>
                    <ul class="children">
                        @foreach($values->subCategory as $subcategory)
                        <li>
                            <a href="{{ url('/category/'.$subcategory->id) }}">
                                {{ $subcategory->title }}
                            </a>
                        </li>
                        @endforeach
<!--                        <li>-->
<!--                            <a href="parallax-category-shop.html">-->
<!--                                Jackets & Coats-->
<!--                                <span>(7)</span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="parallax-category-shop.html">-->
<!--                                Pants & Chinos-->
<!--                                <span>(25)</span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="parallax-category-shop.html">-->
<!--                                T-Shirts & Tanks-->
<!--                                <span>(13)</span>-->
<!--                            </a>-->
<!--                        </li>-->
                    </ul>
                </li>
                @endforeach
            </ul>
        </aside>
    </div>
    <!-- /.sidebar -->
</div>
<div class="col-md-9">
<div class="main-content">

<div class="box-product row">
    @foreach($products as $values)
<div class="col-md-4 col-sm-6">
    <div class="product-item">
        <div class="product-thumb">
            <div class="main-img">
                <a href="{{ url('/product/'.$values->product_id) }}">
                    {!! HTML::image('uploads/'.$values->file_path, 'a picture', array('class' => 'img-responsive')) !!}
<!--                    <img class="img-responsive" src="assets/images/product-img-1.jpg" alt="img" />-->
                </a>
            </div>
<!--            <div class="overlay-img">-->
<!--                <a href="{{ url('/product/'.$values->id) }}">-->
<!--                    {!! HTML::image('assets/images/product-img-1.jpg', 'a picture', array('class' => 'img-responsive')) !!}-->
<!--                    <img class="img-responsive" src="assets/images/product-img-1-thumb.jpg" alt="img" />-->
<!--                </a>-->
<!--            </div>-->
            <a href="{{ url('/product/'.$values->product_id) }}" class="details"><i class="pe-7s-search"></i></a>
        </div>
        <h4 class="product-name"><a href="{{ url('/product/'.$values->product_id) }}">{{ $values->product_title }}</a></h4>
        <p class="product-price">
            {{ $values->product_price }}
        </p>
        <div class="group-buttons">
            <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <span>Add to Cart</span>
            </button>
            <!--                                            <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                        <i class="pe-7s-repeat"></i>
                                                        </button>-->
            <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                <i class="pe-7s-like"></i>
            </button>
        </div>
    </div>

</div>
    @endforeach

</div>
    {!! str_replace('/?', '?', $products->render()) !!}

<!-- /.box-product -->
<!--<nav class="pagination">-->
<!--    <ul class="page-numbers">-->
<!--        <li><a href="#">{!! $products->render() !!}</a></li>-->
<!--        <li><span class="current">2</span></li>-->
<!--        <li><a href="#">3</a></li>-->
<!--        <li><a href="#">4</a></li>-->
<!--        <li><a href="#">5</a></li>-->
<!--        <li><a href="#">6</a></li>-->
<!--        <li><a class="last " href="#"><i class="fa fa-angle-double-right"></i></a></li>-->
<!--    </ul>-->
<!--</nav>-->
<!-- /.pagination -->
</div>
<!-- /.main-content -->
</div>
</div>
</div>
</div>
<!-- /.main -->
</body>
@stop