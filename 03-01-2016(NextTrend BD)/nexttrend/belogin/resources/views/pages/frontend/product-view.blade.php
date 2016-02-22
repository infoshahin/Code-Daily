@extends('layouts.frontend.frontend')
@section('title', 'Product')
@section('content')
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
                    </div>
                    <div class="previews">
                        <div class="box-content">
                            @foreach($images as $values)
                            <div>
                                <img style="width: 70px;" alt="a picture" data-full="<?php echo '../uploads/'.$values->file_path; ?>" src="<?php echo '../uploads/'.$values->file_path; ?>">
                            </div>
                            @endforeach
<!--                            <div>-->
<!--                                <img data-full="image/ne-image/Mans/1370772984.jpg" src="image/ne-image/Mans/1370772984-small.jpg" />-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="previews-arrow">
            <div class="nav">
                <span class="prev"><i class="fa fa-angle-left"></i></span>
                <span class="next"><i class="fa fa-angle-right"></i></span>
            </div>
        </div>
    </div>

    @foreach($product as $values)
    <div class="col-md-6">
        <!-- /.breadcrumb -->
        <div class="summary">
            <h2 class="product-name">{{ $values->product_title }}</h2>
            <div class="product-statistic">
                <!--<span class="review-count">30 REVIEWS</span>-->
                <!--<span class="review-star-read star-rating" data-score="4"></span>-->
            </div>
            <div class="code">
                CODE # {{   $values->product_code }}
            </div>

            <div class="product-action">
                <div class="clearfix">

                    <a href="#Product" data-toggle="modal"><button type="submit" class="add-to-cart-btn">CONTACT INFO</button></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div id="Product" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">CONTACT INFO</h4>
                </div>
                <div class="envelop">
                    <p><span class="icon-envelop"><i class="fa fa-envelope"></i> info@nexttrendbd.com </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--model-->

</div>
<!-- /.product -->
@if(count($related_products) >= 5)
<div class="related-products">
    <div class="tab2 nt-tab2">
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
                        <div class="product-item">
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
                            </div>
                            <h4 class="product-name"><a href="{{ url('/products/'.$values->id) }}">{{ $values->product_title }}</a></h4>
                            <p class="product-code">
                                CODE # {{   $values->product_code }}
                            </p>
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
@stop