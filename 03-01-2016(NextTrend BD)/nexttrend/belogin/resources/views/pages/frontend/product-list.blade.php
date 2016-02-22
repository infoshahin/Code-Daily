@extends('layouts.frontend.frontend')
@section('title', 'Categories')
@section('content')
<div class="main">
<div class="container">
<!-- /.header-page -->
<div class="row">
<div class="col-md-3">
    <div class="sidebar" id="accordion-man">
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
    <!-- /.sidebar -->
</div>
<div class="col-md-9">
    <div class="main-content">
        <div class="box-product row">
            @foreach($products as $values)
            <div class="col-md-4 col-sm-4 col-xs-12 ">
                <div class="product-item">
                    <div class="product-thumb">
                        <div class="main-img nt-main-img">
                            <a href="{{ url('/products/'.$values->product_id) }}">
                                @if(isset($values->file_path) == null)
                                {!! HTML::image('uploads/', 'No Image', array('class' => 'img-responsive')) !!}
                                @else
                                {!! HTML::image('uploads/'.$values->file_path, 'a picture', array('class' => 'img-responsive')) !!}

                                @endif
                            </a>
                        </div>
                    </div>
                    <h4 class="product-name"><a href="{{ url('/products/'.$values->product_id) }}">{{ $values->product_title }}</a></h4>
                    <p class="product-code">
                        CODE # {{   $values->product_code }}
                    </p>
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
<!--        <nav class="pagination">-->
<!--            <ul class="page-numbers">-->
<!--                <li><a href="#">1</a></li>-->
<!--                <li><span class="current">2</span></li>-->
<!--                <li><a href="#">3</a></li>-->
<!--                <li><a href="#">4</a></li>-->
<!--                <li><a href="#">5</a></li>-->
<!--                <li><a href="#">6</a></li>-->
<!--                <li><a class="last" href="#"><i class="fa fa-angle-double-right"></i></a></li>-->
<!--            </ul>-->
<!--        </nav>-->
        <!-- /.pagination -->
    </div>
    <!-- /.main-content -->
</div>
</div>
</div>
</div>
@stop