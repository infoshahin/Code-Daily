@extends('layouts.frontend.frontend')
@section('title', 'Home')
@section('content')
<body class="home1 ">
<!-- slideshow -->
<div class="slideshow">
    <div id="slideshow1">
        <ul class="allinone_bannerRotator_list">
            @foreach($slider_images as $images)
            <li data-text-id="#">{!! HTML::image('uploads/'.$images->image, 'a picture') !!}</li>
            @endforeach
        </ul>
    </div>
</div>
<!-- /slideshow -->

<!-- About Section -->
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
                             /*background-color: #00923F;*/
                             width: 200PX;
                             padding: 10px;
                             text-align: center;
                             margin: 0 auto;
                             display: block;">
                    <a href="{{ url('/aboutus') }}" style="  color: #00923f;">MORE DETAILS</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /About Section -->

<!-- Artisan Banner -->
<section>
    <div class="container-fluid tab3">
        {!! HTML::image('image/logo-section.png', 'img', array('class' => 'img-responsive')) !!}
    </div>
</section>
<!-- /Artisan Banner -->

<!-- /.Categories -->
<div class="features">
    <div class="container-fluid">
        <div class="row">
            @foreach($categories as $value)
            <div class="col-md-3 col-xs-12">
                <div class="sale">
                    <a href="{{ url('/category/'.$value->title) }}">
                        <div class="text-box">
                            {{$value->title}}
                        </div>
                        <div class="icon-box icon-box1">
                            {!! HTML::image('image/category.png', 'a picture', array('width' => '40px')) !!}
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- /.Categories -->

<!-- New Arrival -->
<div class="sale-off">
<div class="container">
<div class="tab2">
    <h3>NEW ARRIVALS</h3><br>
</div>
<div id="carousel-2">
<div class="box-content" style="height: -1116px !important">
    <?php $count = 0;?>
    @foreach(array_chunk($products->all(), 4) as $product)
<div class="showcase">
    <div class="row">
        <div class="box-product">
            @foreach($product as $values)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img">
                            <a href="{{ url('/product/'.$values->id) }}">
                                {!! HTML::image('uploads/'.$new_arrivals_product_image['file_path_'.$count], 'a picture', array('class' => 'img-responsive')) !!}
                                <?php $count++;?>
                            </a>
                        </div>
<!--                        <div class="overlay-img">-->
<!--                            <a href="detail_page2.html">-->
<!--                                <img class="img-responsive" src="assets/images/product-img-5-thumb.jpg" alt="img" />-->
<!--                            </a>-->
<!--                        </div>-->
                        <a href="{{ url('/product/'.$values->id) }}" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <h4 class="product-name"><a href="{{ url('/product/'.$values->id) }}">{{$values->product_title}}</a></h4>
                    <p class="product-price">
                        <ins><span class="amount"> {{$values->product_price}} </span></ins>
                    </p>
<!--                    <div class="group-buttons">-->
<!--                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">-->
<!--                            <span>Add to Cart</span>-->
<!--                        </button>-->
<!--                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">-->
<!--                            <i class="pe-7s-like"></i>-->
<!--                        </button>-->
<!--                    </div>-->
                </div>
            </div>
            @endforeach
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
</div>
</div>
<!-- /New Arrival -->

<!-- Accessories -->
<section id="item">
    <div class="container ">
        <div class="row">
            <div class="col-xs-12 col-md-12  ">
                <div class="thumbnai text-center ">
                    <h3 class="tab2" >Accessories</h3>
                    <h5>It is a long established fact that.It is a long established fact that It is a long established fact that</h5>
<!--                    <a href="category-3.html"><button type="button" class="btn btn-lg get ">Shop Now</button></a>-->

                    {!! HTML::image('image/13581-women-s-accessories-spring-2013.jpg', 'img', array('class' => 'img-responsive')) !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Accessories -->
</body>
@stop