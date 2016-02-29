@extends('layouts.frontend.frontend')
@section('title', 'Product')
@section('content')

<!--<style type="text/css">-->
<!--    .owl-stage, .owl-item{-->
<!--        width: 100% !important;-->
<!--    }-->
<!--</style>-->

<body class="home1">
<div class="main">
<div class="container">
<div class="main-content">
<div class="product">
<div class="row">
    <div class="col-md-6">
        <div class="images">
            <div id="product-showcase">
                <div class="gallery">
                    <div class="full">
                        <?php $count=1; ?>
                        @foreach($images as $values)
                            <?php if($count==1){ ?>
                            {!! HTML::image('uploads/'.$values->file_path, 'a picture')!!}
                            <?php } $count++; ?>
                        @endforeach
                        <a href="#" class="details"><i class="pe-7s-search"></i></a>
                    </div>
                    <div class="previews">
                        <div class="box-content">
                            @foreach($images as $values)
                            <div>
                                <img style="width: 70px" alt="a picture" data-full="<?php echo '../uploads/'.$values->file_path; ?>" src="<?php echo '../uploads/'.$values->file_path; ?>">
                            </div>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                        <div class="nav">
                            <span class="prev"><i class="fa fa-angle-left"></i></span>
                            <span class="next"><i class="fa fa-angle-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                BDT: {{ $values->product_price }}
            </div>
            <div class="short-desc">
                Description: {{ $values->product_details }}
            </div>
<!--            <div class="product-action">-->
<!--                <div class="clearfix">-->
<!--                    <div class="quantity">-->
<!--                        <button class="minus-btn"><i class="fa fa-minus"></i></button>-->
<!--                        <input type="text" value="1" />-->
<!--                        <button class="plus-btn"><i class="fa fa-plus"></i></button>-->
<!--                    </div>-->
<!--                    <button type="submit" class="add-to-cart-btn">ADD TO CART</button>-->
<!--                </div>-->
<!--                <a href="#" class="wishlist-link"><i class="pe-7s-like"></i>ADD TO WISHLIST</a>-->
<!--            </div>-->
            <ul class="ul-product">
               
                @foreach($category as $values)
                <li>Category: {{ $values->title }}</li>
                @endforeach
<!--                <li>Tags: <a href="parallax-category-shop.html">Shop</a>, <a href="parallax-category-shop.html">Theme</a>, <a href="parallax-category-shop.html">WooCommerce</a>.</li>-->
            </ul>
<!--            <div class="share-this">-->
<!--                <h4>SHARE THIS:</h4>-->
<!--                <ul class="list-social-2">-->
<!--                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>-->
<!--                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>-->
<!--                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>-->
<!--                    <li><a href="#" class="vk"><i class="fa fa-vk"></i></a></li>-->
<!--                </ul>-->
<!--                 /.list-social-2 -->
<!--            </div>-->
        </div>
    </div>
    @endforeach
</div>
<br><br>
<!-- /.product -->
@if(count($related_products) >= 5)
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
                                    <a href="{{ url('/products/'.$values->id) }}">
                                     @if(isset($new_arrivals_product_image['file_path_'.$count]) == null)
                          {!! HTML::image('uploads/', 'No Image', array('class' => 'img-responsive')) !!}
                         @else
                        {!! HTML::image('uploads/'.$new_arrivals_product_image['file_path_'.$count], 'a picture', array('class' => 'img-responsive')) !!}
                         @endif
                                       
                                        <?php $count++;?>
                                    </a>
                                </div>
                                <!--                        <div class="overlay-img">-->
                                <!--                            <a href="single-product.html">-->
                                <!--                                <img class="img-responsive" src="assets/images/product-img-9.jpg" alt="img" />-->
                                <!--                            </a>-->
                                <!--                        </div>-->
                                <!--                                                    <div class="countdown" data-time="2015/09/06"></div>
                                                                                    <div class="product-new">
                                                                                        NEW
                                                                                    </div>-->
                                <a href="{{ url('/products/'.$values->id) }}" class="details"><i class="pe-7s-search"></i></a>
                            </div>
                            <h4 class="product-name"><a href="{{ url('/products/'.$values->id) }}">{{ $values->product_title }}</a></h4>
                            <p class="product-price">
                                {{ $values->product_price }}
                            </p>
                            <!--                    <div class="group-buttons">-->
                            <!--                        <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">-->
                            <!--                            <span>Add to Cart</span>-->
                            <!--                        </button>-->
                            <!--                                                                            <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">-->
                            <!--                                                                            <i class="pe-7s-repeat"></i>-->
                            <!--                                                                            </button>-->
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
@endif
<!-- /.related-products -->
</div>
<!-- /.main-content -->
</div>
</div>
<!-- /.main -->
</div>
</body>
@stop