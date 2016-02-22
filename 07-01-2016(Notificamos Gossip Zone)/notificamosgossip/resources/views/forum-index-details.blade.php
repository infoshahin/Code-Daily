@extends('layout')
@section('title', 'Gossip Details')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="details-body-section">
                <div class="col-md-8 mt mb">

                    <div class="col-md-12 col-sm-12 col-xs-12 user-section-details">
                        <div class="media user-text">
                            <a href="image/forum/fashion-font-b-cloth-b-font-korea-font-b-Play-b-font-Dirty-O-neck-men.jpg"  class="media-left fancybox" rel="ligthbox">
<!--                                <img src="image/forum/fashion-font-b-cloth-b-font-korea-font-b-Play-b-font-Dirty-O-neck-men.jpg" class="img-responsive" alt="">-->
                                {!! HTML::image('image/forum/fashion-font-b-cloth-b-font-korea-font-b-Play-b-font-Dirty-O-neck-men.jpg','', array('class' => 'img-responsive')) !!}
                            </a>
                        </div>
                        <div class="media-body-details">
                            <h3 class="media-heading">Just Finished the Project page.</h3>
                            <p>Just Finished the Project management page. In this page a super user can add new task, remove task add team.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
                            <!-- Nested media object -->
                        </div>
                    </div>
                    <div class=" col-md-12 col-sm-12 col-xs-12 user-section-details" style="margin-top: 10px;">
                        <div class="col-md-12 col-sm-12">
                            <div class="post-block post-comments clearfix">
                                <h3><i class="fa fa-comments"></i> Comments (3)</h3>
                                <hr>
                                <ul class="comments">
                                    <li>
                                        <div class="comment">
                                            <div class="img-circle">
<!--                                                <img class="avatar" alt="" src="image/forum/sayeed.png">-->
                                                {!! HTML::image('image/forum/sayeed.png','', array('class' => 'avatar')) !!}
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                            <span>Sayeed Jony</span>
                                                            <span class="pull-right">
                                                                <span> <a type="button" id="reply" href="#" data-toggle="modal" data-target="#myModal" value="reply"><i class="fa fa-reply"></i> Reply</a></span>
                                                            </span>
                                                        </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                                                <span class="date pull-right">January 12, 2013 at 1:38 pm</span>
                                            </div>
                                            <!--comment-start-->
                                            <div class="post-block post-leave-comment">
                                                {!! Form::open(['id' => 'form', 'role' => 'form']) !!}
                                                <form method="post" action="#" id="form" role="form">
                                                    <!-- Comment -->
                                                    <div class="comment-box">
<!--                                                        <textarea name="text" id="text" class="input-md form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>-->
                                                        {!!Form::textarea('reply', null,array('class' => 'input-md form-control', 'id' => 'reply', 'placeholder' => 'Reply', 'maxlength' => 400, 'rows' => 6  ))!!}
                                                    </div>
                                                    <!-- Send Button -->
                                                    <a href="#"><button class="btn btn-danger send-btn">REPLY</button></a>
<!--                                                </form>-->
                                                    {!! Form::close() !!}
                                            </div>
                                            <!--comment-end-->
                                        </div>

                                        <ul class="comments reply">
                                            <li>
                                                <div class="comment">
                                                    <div class="img-circle">
<!--                                                        <img class="avatar" alt="" src="image/forum/sd bappi.png">-->
                                                        {!! HTML::image('image/forum/sd bappi.png','', array('class' => 'avatar')) !!}
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                                <span class="comment-by">
                                                                    <span>SD Bappi</span>
                                                                </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                        <span class="date pull-right">January 12, 2013 at 1:38 pm</span>
                                                    </div>
                                                </div>
                                                <!--reply-1-->
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div class="img-circle">
<!--                                                        <img class="avatar" alt="" src="image/forum/EVA.jpg">-->
                                                        {!! HTML::image('image/forum/EVA.jpg','', array('class' => 'avatar')) !!}
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                                <span class="comment-by">
                                                                    <span>John Doe</span>
                                                                </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                        <span class="date pull-right">January 12, 2013 at 1:38 pm</span>
                                                    </div>
                                                </div>
                                                <!--reply-2-->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class=" col-md-12 col-sm-12 col-xs-12 user-section-details" style="margin-top: 10px;">
                        <div class="post-block post-leave-comment">
                            <h3>Leave a comment</h3>
                            {!! Form::open(['id' => 'form', 'role' => 'form' ]) !!}
<!--                            <form method="post" action="#" id="form" role="form">-->
                                <!-- Comment -->
                                <div class="comment-box">
<!--                                    <textarea name="text" id="text" class="input-md form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>-->
                                    {!!Form::textarea('comment', null,array('class' => 'input-md form-control', 'id' => 'comment', 'placeholder' => 'Comment', 'maxlength' => 400, 'rows' => 6  ))!!}
                                </div>
                                <!-- Send Button -->
                                <a href="#"><button class="btn btn-danger send-btn">COMMENT</button></a>
<!--                            </form>-->
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!--                                        <div class="col-md-4">
                                                        <div class="right-side">
                                                            <img src="image/forum/res-4.jpg">
                                                        </div>
                                                    </div>-->

        </div>
    </div>
</section>
<script>
</script>
@stop