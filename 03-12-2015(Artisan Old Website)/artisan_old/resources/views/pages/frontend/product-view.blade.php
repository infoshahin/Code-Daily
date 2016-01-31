@extends('layouts.frontend.frontend')
@section('title', 'Product')
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
                                <a href="shopping-cart2.html"><i class="fa fa-shopping-cart"></i> Shopping Cart</a>
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
                        <a href="category-3.html">MAN</a>
                    </li>
                    <li>
                        <a href="category-3.html">WOMAN</a>
                    </li>
                    <li>
                        <a href="blog.html">KIDS</a>
                    </li>
                    <li>
                        <a href="category-3.html">EXCLUSIVE</a>
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
<div class="main">
<div class="container">
<div class="main-content">
<div class="product">
<div class="row">

    <div class="col-md-6">
        @foreach($images as $values)
        <div class="images">
            <div id="product-showcase">
                <div class="gallery">
                    <div class="full">
                        <?php if($values->thumb == 1)
                        {
                            ?>
                            {!! HTML::image('uploads/'.$values->file_path, 'a picture', array('class' => 'img-responsive')) !!}
                            <?php
                        }
                        ?>

<!--                        <img src="assets/images/men1.jpg" />-->
                        <a href="#" class="details"><i class="pe-7s-search"></i></a>
                    </div>

                    <div class="previews">
                        <div class="box-content">
                            <div>
                                {!! HTML::image('uploads/'.$values->file_path, 'a picture', array('class'=>'img-responsive','data-full'=>"uploads/".$values->file_path))!!}
<!--                                {!! HTML::image('uploads/'.$values->file_path, 'a picture', array('class' => 'img-responsive')) !!}-->
<!--                                <img class="selected" data-full="assets/images/men1.jpg" src="assets/images/men11.jpg" />-->
                            </div>
<!--                            <div>-->
<!--                                {!! HTML::image('assets/images/gril12.JPG', 'a picture', array('data-full'=>'assets/images/gril1.JPG'))!!}-->
<!--                                <img data-full="assets/images/gril1.JPG" src="assets/images/gril12.JPG" />-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                {!! HTML::image('assets/images/men11.jpg', 'a picture', array('data-full'=>'assets/images/men11.jpg'))!!}-->
<!--                                <img data-full="assets/images/men1.jpg" src="assets/images/men11.jpg" />-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                {!! HTML::image('assets/images/gril22.jpg', 'a picture', array('data-full'=>'assets/images/gril2.jpg'))!!}-->
<!--                                <img data-full="assets/images/gril2.jpg" src="assets/images/gril22.jpg" />-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                {!! HTML::image('assets/images/small-product-2.jpg', 'a picture', array('data-full'=>'assets/images/gril2.jpg'))!!}-->
<!--                                <img data-full="assets/images/gril2.jpg" src="assets/images/small-product-2.jpg" />-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                {!! HTML::image('assets/images/small-product-3.jpg', 'a picture', array('data-full'=>'assets/images/men1.jpg'))!!}-->
<!--                                <img data-full="assets/images/men1.jpg" src="assets/images/small-product-3.jpg" />-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                {!! HTML::image('assets/images/small-product-1.jpg', 'a picture', array('data-full'=>'assets/images/big-product-1.jpg'))!!}-->
<!--                                <img data-full="assets/images/big-product-1.jpg" src="assets/images/small-product-1.jpg" />-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                {!! HTML::image('assets/images/small-product-2.jpg', 'a picture', array('data-full'=>'assets/images/big-product-2.jpg'))!!}-->
<!--                                <img data-full="assets/images/big-product-2.jpg" src="assets/images/small-product-2.jpg" />-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                {!! HTML::image('assets/images/small-product-3.jpg', 'a picture', array('data-full'=>'assets/images/big-product-3.jpg'))!!}-->
<!--                                <img data-full="assets/images/big-product-3.jpg" src="assets/images/small-product-3.jpg" />-->
<!--                            </div>-->
                        </div>
                        <div class="nav">
                            <span class="prev"><i class="fa fa-angle-left"></i></span>
                            <span class="next"><i class="fa fa-angle-right"></i></span>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        @endforeach

    </div>

    @foreach($product as $values)
    <div class="col-md-6">
<!--        <nav class="breadcrumb">-->
<!--            <a href="index.html">HOME</a> <i class="fa fa-angle-right"></i> <a href="shop-fullwidth.html">MAIN MENU</a> <i class="fa fa-angle-right"></i> <span>PIG ON A STICK</span>-->
<!--        </nav>-->
      <!-- /.breadcrumb -->
        <div class="summary">
            <h2 class="product-name">{{ $values->product_title }}</h2>
            <div class="product-statistic">
                <!--<span class="review-count">30 REVIEWS</span>-->
                <!--<span class="review-star-read star-rating" data-score="4"></span>-->
            </div>
            <div class="price">
                {{ $values->product_price }}
            </div>
            <div class="short-desc">
                {{ $values->product_details }}
            </div>
            <div class="product-action">
                <div class="clearfix">
                    <div class="quantity">
                        <button class="minus-btn"><i class="fa fa-minus"></i></button>
                        <input type="text" value="1" />
                        <button class="plus-btn"><i class="fa fa-plus"></i></button>
                    </div>
                    <button type="submit" class="add-to-cart-btn">ADD TO CART</button>
                </div>
                <a href="#" class="wishlist-link"><i class="pe-7s-like"></i>ADD TO WISHLIST</a>
            </div>
            <ul class="ul-product">
                <li>SKU: {{ $values->product_sku }}</li>
                <li>Categories: <a href="parallax-category-shop.html">{{$values->title}}</a> </li>
                <li>Tags: <a href="parallax-category-shop.html">Shop</a>, <a href="parallax-category-shop.html">Theme</a>, <a href="parallax-category-shop.html">WooCommerce</a>.</li>
            </ul>
            <div class="share-this">
                <h4>SHARE THIS:</h4>
                <ul class="list-social-2">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="vk"><i class="fa fa-vk"></i></a></li>
                </ul>
                <!-- /.list-social-2 -->
            </div>
        </div>
    </div>
    @endforeach
</div>
<!--                        <div class="product-tabs vertical-tabs">
                            <ul class="resp-tabs-list hor_1">
                                <li>DESCRIPTION</li>
                                <li>ADDITIONAL INFORMATION</li>
                                <li>REVIEWS (10)</li>
                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <div>
                                    Cras ut magna quis metus tristique vulputate. Ut a sapien scelerisque, fermentum lorem a, aliquet mi. Ut lobortis lorem nisl, vel euismod ligula ornare quis. In consectetur elit sed leo fringilla, a placerat ipsum mollis. Proin suscipit metus vitae lectus malesuada scelerisque. Quisque interdum malesuada nisi non accumsan. Suspendisse eget lorem libero. Pellentesque mauris risus, cursus eget aliquet quis, iaculis vel purus. Nam in ligula vel mi interdum tincidunt sit amet eget leo. Phasellus dapibus augue a lorem luctus aliquet. Duis consectetur eros arcu, eget consequat orci mattis non.Nam nec ex maximus sem egestas elementum. Duis nisl arcu, sodales ut porttitor at, tincidunt vitae risus. Suspendisse eu nunc ligula.
                                </div>
                                <div>
                                    Lorem consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis.
                                </div>
                                <div>
                                    <div class="comments-area">
                                <div class="comment-account media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="avatar" src="assets/images/cmt-avatar-1.jpg" alt="img" />
                                        </a>
                                        <h4>ANNA PANDORA</h4>
                                        <h5>Stylist</h5>
                                    </div>
                                    <div class="media-body">
                                        Nulla mattis mi quis elit porttitor. Ut ut laoreet justo. Suspendisse nulla ligula, aliquet sed cursus ut, sodales sit amet metus. Proin sollicitudin, urna nec placerat faucibus, ex elit mattis nulla, sed placerat libero dui sem. Etiam non auctor odio. Cras posuere ante vitae molestie. Nunc imperdiet viverra nunc, eget aliquet diam.
                                    </div>
                                </div>
                                <p class="comment-count">5 COMMENTS</p>
                                <ol class="comment-list media-list">
                                    <li class="comment parent">
                                        <article class="comment-body media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="avatar" src="assets/images/cmt-avatar-2.jpg" alt="img" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="comment-content">
                                                    Nulla mattis mi quis elit porttitor gravida. Ut ut laoreet justo. Suspendisse nulla ligula
                                                </div>
                                                <div class="comment-info">
                                                    <h5>LANA WINTERS</h5>
                                                    <div class="comment-date">
                                                        <a href="#"><i class="pe-7s-clock"></i>JANUARY 15, 2015</a>
                                                    </div>
                                                    <div class="comment-reply">
                                                        <a class='comment-reply-link' href='#'>Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <ul class="children">
                                            <li class="comment">
                                                <article class="comment-body media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="avatar" src="assets/images/cmt-avatar-3.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="comment-content">
                                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla fermentum libero libero, ac mollis nisl commodo in.
                                                        </div>
                                                        <div class="comment-info">
                                                            <h5>JOHNNY CLAMP</h5>
                                                            <div class="comment-date">
                                                                <a href="#"><i class="pe-7s-clock"></i>JANUARY 15, 2015</a>
                                                            </div>
                                                            <div class="comment-reply">
                                                                <a class='comment-reply-link' href='#'>Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                            <li class="comment">
                                                <article class="comment-body media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="avatar" src="assets/images/cmt-avatar-2.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="comment-content">
                                                            Nulla mattis mi quis elit porttitor gravida.
                                                        </div>
                                                        <div class="comment-info">
                                                            <h5>LANA WINTERS</h5>
                                                            <div class="comment-date">
                                                                <a href="#"><i class="pe-7s-clock"></i>JANUARY 15, 2015</a>
                                                            </div>
                                                            <div class="comment-reply">
                                                                <a class='comment-reply-link' href='#'>Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="comment">
                                        <article class="comment-body media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="avatar" src="assets/images/cmt-avatar-4.jpg" alt="img" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="comment-content">
                                                    Phasellus finibus neque in elementum sagittis. Integer congue cursus ullamcorper. Pellentesque a metus pulvinar, varius nisl porta, cursus nibh. Praesent ut dapibus nisl, ut faucibus sem. Maecenas non congue ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam vitae vehicula justo, at tincidunt nulla.
                                                </div>
                                                <div class="comment-info">
                                                    <h5>ANNA PANDORA</h5>
                                                    <div class="comment-date">
                                                        <a href="#"><i class="pe-7s-clock"></i>JANUARY 15, 2015</a>
                                                    </div>
                                                    <div class="comment-reply">
                                                        <a class='comment-reply-link' href='#'>Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                </ol>
                                <div class="comment-respond pe-7s-user">
                                    <form action="#" class="comment-form">
                                        <div class="wrap-rating">
                                            <h4>YOUR RATING: </h4>
                                            <span class="review-star star-rating" data-score="0"></span>
                                        </div>
                                        <div class="wrap-textarea">
                                            <textarea class="textarea-form" placeholder="YOUR REVIEW*"></textarea>
                                        </div>
                                        <input class="input-form" type="text" placeholder="YOUR NAME*" />
                                        <input class="input-form" type="email" placeholder="YOUR EMAIL*" />
                                        <button type="submit">ADD REVIEW</button>
                                    </form>
                                </div>
                            </div>
                             /.comments-area
                                </div>
                            </div>
                        </div>
                         /.product-tabs -->
<!--</div>-->
<br><br><br><br>
<!-- /.product -->
<div class="related-products">
<div class="tab2">
    <h3>RELATED PRODUCTS</h3>
</div>

<div class="box-content">
    <?php $count = 0;?>
    @foreach(array_chunk($related_products->all(), 4) as $product)
<div class="showcase">
    <div class="row">
        <div class="box-product">
            @foreach($product as $values)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item has-deal">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="single-product.html">
                                {!! HTML::image('uploads/'.$new_arrivals_product_image['file_path_'.$count], 'a picture', array('class' => 'img-responsive')) !!}
                                <?php $count++;?>
<!--

<!--                                {!! HTML::image('assets/images/product-img-9.jpg', 'img', array('class'=>'img-responsive'))!!}-->
<!--                                <img class="img-responsive" src="assets/images/product-img-9.jpg" alt="img" />-->
                            </a>
                        </div>
<!--                        <div class="overlay-img">-->
<!--                            <a href="single-product.html">-->
<!--                                {!! HTML::image('assets/images/product-img-9.jpg', 'img', array('class'=>'img-responsive'))!!}-->
<!--<!--                                <img class="img-responsive" src="assets/images/product-img-9.jpg" alt="img" />-->-->
<!--                            </a>-->
<!--                        </div>-->
                        <!--                                                    <div class="countdown" data-time="2015/09/06"></div>
                                                                            <div class="product-new">
                                                                                NEW
                                                                            </div>-->
                        <a href="single-product.html" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="single-product.html">{{ $values->product_title }}</a></h4>
                    <p class="product-price">
                        {{ $values->product_price }}
                    </p>
                    <div class="group-buttons">
                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <span>Add to Cart</span>
                        </button>
                        <!--                                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">
                                                                            <i class="pe-7s-repeat"></i>
                                                                            </button>-->
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="pe-7s-like"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
<!--            <div class="col-lg-3 col-md-4 col-sm-6">-->
<!--                <div class="product-item">-->
<!--                    <div class="product-thumb">-->
<!--                        <div class="main-img">-->
<!--                            <a href="single-product.html">-->
<!--                                {!! HTML::image('assets/images/product-img-10.jpg', 'img', array('class'=>'img-responsive'))!!}-->
<!--                                <img class="img-responsive" src="assets/images/product-img-10.jpg" alt="img" />-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="overlay-img">-->
<!--                            <a href="single-product.html">-->
<!--                                {!! HTML::image('assets/images/product-img-10.jpg', 'img', array('class'=>'img-responsive'))!!}-->
<!--                                <img class="img-responsive" src="assets/images/product-img-10.jpg" alt="img" />-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <!--                                                    <div class="product-sale">-->
<!--                                                                                -25%-->
<!--                                                                            </div>-->-->
<!--                        <a href="single-product.html" class="details"><i class="pe-7s-search"></i></a>-->
<!--                    </div>-->
<!--                    <h4 class="product-name"><a href="single-product.html">HOODED BOMBER JACKET</a></h4>-->
<!--                    <p class="product-price">-->
<!--                        <ins><span class="amount">100.99 USD</span></ins>-->
<!--                        <del><span class="amount">189.99 USD</span></del>-->
<!--                    </p>-->
<!--                    <div class="group-buttons">-->
<!--                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">-->
<!--                            <span>Add to Cart</span>-->
<!--                        </button>-->
<!--                        <!--                                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">-->
<!--                                                                            <i class="pe-7s-repeat"></i>-->
<!--                                                                            </button>-->-->
<!--                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">-->
<!--                            <i class="pe-7s-like"></i>-->
<!--                        </button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-4 col-sm-6">-->
<!--                <div class="product-item">-->
<!--                    <div class="product-thumb">-->
<!--                        <div class="main-img">-->
<!--                            <a href="single-product.html">-->
<!--                                {!! HTML::image('assets/images/product-img-11.jpg', 'img', array('class'=>'img-responsive'))!!}-->
<!--<!--                                <img class="img-responsive" src="assets/images/product-img-11.jpg" alt="img" />-->-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="overlay-img">-->
<!--                            <a href="single-product.html">-->
<!--                                {!! HTML::image('assets/images/product-img-11.jpg', 'img', array('class'=>'img-responsive'))!!}-->
<!--<!--                                <img class="img-responsive" src="assets/images/product-img-11.jpg" alt="img" />-->-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <!--                                                    <div class="product-sale">-->
<!--                                                                                -25%-->
<!--                                                                            </div>-->-->
<!--                        <a href="single-product.html" class="details"><i class="pe-7s-search"></i></a>-->
<!--                    </div>-->
<!--                    <h4 class="product-name"><a href="single-product.html">STRUCTURED COLLARLESS COAT</a></h4>-->
<!--                    <p class="product-price">-->
<!--                        <ins><span class="amount">100.99 USD</span></ins>-->
<!--                        <del><span class="amount">189.99 USD</span></del>-->
<!--                    </p>-->
<!--                    <div class="group-buttons">-->
<!--                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">-->
<!--                            <span>Add to Cart</span>-->
<!--                        </button>-->
<!--                        <!--                                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">-->
<!--                                                                            <i class="pe-7s-repeat"></i>-->
<!--                                                                            </button>-->-->
<!--                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">-->
<!--                            <i class="pe-7s-like"></i>-->
<!--                        </button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-4 col-sm-6">-->
<!--                <div class="product-item">-->
<!--                    <div class="product-thumb">-->
<!--                        <div class="main-img">-->
<!--                            <a href="single-product.html">-->
<!--                                {!! HTML::image('assets/images/product-img-12.jpg', 'img', array('class'=>'img-responsive'))!!}-->
<!--<!--                                <img class="img-responsive" src="assets/images/product-img-12.jpg" alt="img" />-->-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="overlay-img">-->
<!--                            <a href="single-product.html">-->
<!--                                {!! HTML::image('assets/images/product-img-12.jpg', 'img', array('class'=>'img-responsive'))!!}-->
<!--<!--                                <img class="img-responsive" src="assets/images/product-img-12.jpg" alt="img" />-->-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <!--                                                    <div class="product-sale">-->
<!--                                                                                -25%-->
<!--                                                                            </div>-->-->
<!--                        <a href="single-product.html" class="details"><i class="pe-7s-search"></i></a>-->
<!--                    </div>-->
<!--                    <h4 class="product-name"><a href="single-product.html">COAT WITH WRAPAROUND COLLAR</a></h4>-->
<!--                    <p class="product-price">-->
<!--                        <ins><span class="amount">100.99 USD</span></ins>-->
<!--                        <del><span class="amount">189.99 USD</span></del>-->
<!--                    </p>-->
<!--                    <div class="group-buttons">-->
<!--                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">-->
<!--                            <span>Add to Cart</span>-->
<!--                        </button>-->
<!--                        <!--                                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">-->
<!--                                                                            <i class="pe-7s-repeat"></i>-->
<!--                                                                            </button>-->-->
<!--                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">-->
<!--                            <i class="pe-7s-like"></i>-->
<!--                        </button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>
    @endforeach
</div>

<div class="nav">
    <span class="prev"><i class="fa fa-angle-left"></i></span>
    <span class="next"><i class="fa fa-angle-right"></i></span>
</div>
</div>
<!-- /.related-products -->
</div>
<!-- /.main-content -->
</div>
</div>
<!-- /.main -->
</div>

<br><br>
</body>
@stop