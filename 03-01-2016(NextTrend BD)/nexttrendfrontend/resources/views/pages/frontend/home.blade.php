@extends('layouts.frontend.frontend')
@section('title', 'Home')
@section('content')
<div class="slideshow">
    <div id="slideshow1">
        <ul class="allinone_bannerRotator_list">
            @foreach($slider_images as $images)
            <li data-text-id="#">{!! HTML::image('uploads/'.$images->image, 'img') !!}</li>
            @endforeach
<!--            <li data-text-id="#content_ss_1"><img src="image/ne-image/slide (1).jpg" alt="img" /></li>-->
<!--            <li data-text-id="#content_ss_2"><img src="image/ne-image/slide (2).jpg" alt="img" /></li>-->
<!--            <li data-text-id="#content_ss_3"><img src="image/ne-image/slide (3).jpg" alt="img" /></li>-->
        </ul>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="title-section">
                <h1>Welcome to NexttrendBD</h1><br>
                <p>
                    Next Trend is an exclusive and 100% export oriented garment trading agent in Bangladesh. The company has established in 2004. The company has started its journey with an intention to work with global people who are interested to manufacture garment items in BD. Our company is really eager to assist those buyers who would place their order through us in Bangladesh. In this long journey our buying house have worked with so many buyers from so many countries. We have worked with all of our buyers perfectly and cordially. Our main strength is we maintain the quality as per the requirement of the buyers. Our team helps us to shift the product with perfect quality on time. </h3>
                    The major strength is its management; we want our employees to feel challenges and make a meaningful commitment to the company through their individual contribution. In today's industry we strongly believe that "Our Product is our Success". Our mission statement is: Quality in all aspect is the driving force of our operations'. Persistence and development ensure quality enhancement and complete customer satisfaction.
                </p>
                <a href="{{ url('/aboutus') }}"><button class="btn btn-danger btn-hm-abu ">SEE MORE</button></a>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<div class="pro">
    <center><h1 style="text-transform: uppercase; color: #333;">Our Products</h1></center>
</div>
<div class="features">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xs-12 hvr-pulse-grow">
                <div class="sale nt-sale">
                    <a href="category-man.html">
                        <div class="text-box">
                            MAN
                        </div>
                        <div class="icon-box icon-box1">
                            <img src="image/avatar23.png" width="40px;">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 hvr-pulse-grow">
                <div class="giveway nt-giveway">
                    <a href="category-woman.html">
                        <div class="text-box">
                            WOMAN
                        </div>
                        <div class="icon-box">
                            <img src="image/woman105.png" width="40px;">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 hvr-pulse-grow">
                <div class="freeship nt-freeship">
                    <a href="category-kids.html">
                        <div class="text-box" >
                            KIDS
                        </div>
                        <div class="icon-box">
                            <img src="image/kids1.png" width="40px;">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 hvr-pulse-grow">
                <div class="freeship nt-freeship">
                    <a href="category-kids.html">
                        <div class="text-box">
                            EXCLUSIVE
                        </div>
                        <div class="icon-box">
                            <img src="image/ne-image/white-logo.png" width="40px;">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end-features-->
@stop