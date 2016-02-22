@extends('layout')
@section('title', 'Gossip Zone')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt">
                <div class="col-md-8 ">
                    <div class="user-section">
                        <div class="col-md-2 col-sm-2 col-xs-">
                            <div class="media user-text">
                                <a href="image/forum/res-4.jpg"  class="media-left fancybox" rel="ligthbox">
                                    {!! HTML::image('image/forum/res-4.jpg', 'user-1', array('class' => 'img-responsive')) !!}
                                </a>
                            </div>
                        </div>

                        <div class="col-md-8 com-sm-8">
                            <div class="media-body text-heading">
                                <a href="{{ url('/details') }}"> <h4 class="media-heading">Just Finished the Project management page. In this page a super user can add new task, remove task add team </h4></a>
                                <div class="message">
                                    <span class="comment-num" > 0 </span>
                                    <span class="comment-text"> Comment</span>
                                    <span class="view-num"> 100</span>
                                    <span class="view-text"> views</span>
                                    <span class="hr-num"> 2</span>
                                    <span class="hr-text"> hours ago</span>
                                </div>
                                <!-- Nested media object -->
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="hrs-section">

                                <a href="{{ url('/details') }}"><button class="btn btn-danger review-btn">Gossip Here</button></a>
                            </div>
                        </div>
                    </div>

                    <!--user-1-->

                    <nav class="text-center">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-4">
                    <div class="right-section mb">
                        <img src="image/forum/bg-gallery-compressor-1024x683.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!--user-1-->
    </div>
</section>
@stop