@extends('layouts.frontend.frontend')
@section('title', 'Categories')
@section('content')
<body class="home1">
<div class="main">
<div class="container">
<div class="header-page tab2">
    <h1>PRODUCTS</h1>
</div>
<br><br>
<!-- Categories -->
<!-- Sidebar -->
<div class="row">
<div class="col-md-3">
    <div class="sidebar">
        <aside class="widget">
            <h4 class="widget-title">CATEGORY</h4>
            <ul class="ul-sidebar">
                @foreach($categories as $values)
                <li>
                    <a href="{{ url('/categories/'.$values->id) }}">
                        {{ $values->title }}
                    </a>
                    <ul class="children">
                        @foreach($values->subCategory as $subcategory)
                        <li>
                            <a href="{{ url('/categories/'.$subcategory->id) }}">
                                {{ $subcategory->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </aside>

    </div>
    <!-- /Sidebar -->
</div>
<!-- /Categories -->
<div class="col-md-9">
<div class="main-content">
<div class="top-products">
</div>
<div class="box-product row">
@foreach($products as $values)
<div class="col-md-4 col-sm-6">
    <div class="product-item">
        <div class="product-thumb">
            <div class="main-img">
                <a href="{{ url('/products/'.$values->product_id) }}">
                 @if(isset($values->file_path) == null)
                          {!! HTML::image('uploads/', 'No Image', array('class' => 'img-responsive')) !!}
                         @else
                          {!! HTML::image('uploads/'.$values->file_path, 'a picture', array('class' => 'img-responsive')) !!}

                   @endif
                </a>
            </div>
            <a href="{{ url('/products/'.$values->product_id) }}" class="details"><i class="pe-7s-search"></i></a>
        </div>
        <h4 class="product-name"><a href="{{ url('/products/'.$values->product_id) }}">{{ $values->product_title }}</a></h4>
        <p class="product-price">
            {{   $values->product_price }}
        </p>
<!--        <div class="group-buttons">-->
<!--            <button type="button" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart">-->
<!--                <span>Add to Cart</span>-->
<!--            </button>-->
<!--                                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Compare this Product">-->
<!--                                                        <i class="pe-7s-repeat"></i>-->
<!--                                                        </button>-->
<!--            <button type="button" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">-->
<!--                <i class="pe-7s-like"></i>-->
<!--            </button>-->
<!--        </div>-->
    </div>
</div>
@endforeach
</div>
<!-- /.box-product -->
    <div class="text-center">
<nav class="pagination">
    {!! str_replace('/?', '?', $products->render()) !!}
</nav>
        </div>
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