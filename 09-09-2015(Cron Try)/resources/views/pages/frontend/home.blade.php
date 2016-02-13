@extends('layouts.frontend.frontend')
<title>{{ trans('lang.home') }}</title>
@section('content')
<div class="content container">
            <div id="promo-slider" class="slider flexslider">
                <ul class="slides">
                    <li>
                    {!! HTML::image('assets/images/slides/slide-1.jpg') !!}
                       
                        <p class="flex-caption">
                            <span class="main" >Join College Green Online</span>
                            <br />
                            <span class="secondary clearfix" >Choose from over 100 online and offline courses</span>
                        </p>
                    </li>
                    <li>
                    {!! HTML::image('assets/images/slides/slide-2.jpg') !!}
                        
                        <p class="flex-caption">
                            <span class="main" >Come to our Open Days</span>
                            <br />
                            <span class="secondary clearfix" >Donec accumsan nunc sed ipsum dapibus consectetur</span>
                        </p>
                    </li>
                    <li>
                    {!! HTML::image('assets/images/slides/slide-3.jpg') !!}
                        
                        <p class="flex-caption">
                            <span class="main" >Discover online courses</span>
                            <br />
                            <span class="secondary clearfix" >Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                        </p>
                    </li>
                    <li>
                    {!! HTML::image('assets/images/slides/slide-4.jpg') !!}
                        
                        <p class="flex-caption">
                            <span class="main" >Nam ultricies accumsan pellentesque</span>
                            <br />
                            <span class="secondary clearfix" >In justo orci, ornare vitae nulla sed, suscipit suscipit augue</span>
                        </p>
                    </li>
                </ul><!--//slides-->
            </div><!--//flexslider-->
            <section class="promo box box-dark">        
                <div class="col-md-9">
                <h1 class="section-heading">Why College Green</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum orci eget nulla mattis, quis viverra tellus porta. Donec vitae neque ut velit eleifend commodo. Maecenas turpis odio, placerat eu lorem ut, suscipit commodo augue.  </p>   
                </div>  
                <div class="col-md-3">
                    <a class="btn btn-cta" href="#"><i class="fa fa-play-circle"></i>Apply Now</a>  
                </div>
            </section><!--//promo-->
            <section class="news">
                <h1 class="section-heading text-highlight"><span class="line">Latest News</span></h1>     
                <div class="carousel-controls">
                    <a class="prev" href="#news-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                    <a class="next" href="#news-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                </div><!--//carousel-controls--> 
                <div class="section-content clearfix">
                    <div id="news-carousel" class="news-carousel carousel slide">
                        <div class="carousel-inner">
                            <div class="item active"> 
                                <div class="col-md-4 news-item">
                                    <h2 class="title"><a href="news-single.html">Phasellus scelerisque metus</a></h2>
                                    {!! HTML::image('assets/images/news/news-thumb-1.jpg') !!}
                                   
                                    <p>Suspendisse purus felis, porttitor quis sollicitudin sit amet, elementum et tortor. Praesent lacinia magna in malesuada vestibulum. Pellentesque urna libero.</p>
                                    <a class="read-more" href="news-single.html">Read more<i class="fa fa-chevron-right"></i></a>                
                                </div><!--//news-item-->
                                <div class="col-md-4 news-item">
                                    <h2 class="title"><a href="news-single.html">Morbi at vestibulum turpis</a></h2>
                                    <p>Nam feugiat erat vel neque mollis, non vulputate erat aliquet. Maecenas ac leo porttitor, semper risus condimentum, cursus elit. Vivamus vitae libero tellus.</p>
                                    <a class="read-more" href="news-single.html">Read more<i class="fa fa-chevron-right"></i></a>
                                    {!! HTML::image('assets/images/news/news-thumb-1.jpg') !!}
                                </div><!--//news-item-->
                                <div class="col-md-4 news-item">
                                    <h2 class="title"><a href="news-single.html">Aliquam id iaculis urna</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum mauris eget sapien consectetur pellentesque. Proin elementum tristique euismod. </p>
                                    <a class="read-more" href="news-single.html">Read more<i class="fa fa-chevron-right"></i></a>
                                   {!! HTML::image('assets/images/news/news-thumb-1.jpg') !!}                                </div><!--//news-item-->
                            </div><!--//item-->
                            <div class="item"> 
                                <div class="col-md-4 news-item">
                                    <h2 class="title"><a href="news-single.html">Phasellus scelerisque metus</a></h2>
                                    {!! HTML::image('assets/images/news/news-thumb-1.jpg') !!}
                                    <p>Suspendisse purus felis, porttitor quis sollicitudin sit amet, elementum et tortor. Praesent lacinia magna in malesuada vestibulum. Pellentesque urna libero.</p>
                                    <a class="read-more" href="news-single.html">Read more<i class="fa fa-chevron-right"></i></a>                
                                </div><!--//news-item-->
                                <div class="col-md-4 news-item">
                                    <h2 class="title"><a href="news-single.html">Morbi at vestibulum turpis</a></h2>
                                    <p>Nam feugiat erat vel neque mollis, non vulputate erat aliquet. Maecenas ac leo porttitor, semper risus condimentum, cursus elit. Vivamus vitae libero tellus.</p>
                                    <a class="read-more" href="news-single.html">Read more<i class="fa fa-chevron-right"></i></a>
                                     {!! HTML::image('assets/images/news/news-thumb-1.jpg') !!}
                                </div><!--//news-item-->
                                <div class="col-md-4 news-item">
                                    <h2 class="title"><a href="news-single.html">Aliquam id iaculis urna</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum mauris eget sapien consectetur pellentesque. Proin elementum tristique euismod. </p>
                                    <a class="read-more" href="news-single.html">Read more<i class="fa fa-chevron-right"></i></a>
                                    {!! HTML::image('assets/images/news/news-thumb-1.jpg') !!}
                                </div><!--//news-item-->
                            </div><!--//item-->
                        </div><!--//carousel-inner-->
                    </div><!--//news-carousel-->  
                </div><!--//section-content-->     
            </section><!--//news-->
            <div class="row cols-wrapper">
                <div class="col-md-3">
                    <section class="events">
                        <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>
                        <div class="section-content">
                            <div class="event-item">
                                <p class="date-label">
                                    <span class="month">FEB</span>
                                    <span class="date-number">18</span>
                                </p>
                                <div class="details">
                                    <h2 class="title">Open Day</h2>
                                    <p class="time"><i class="fa fa-clock-o"></i>10:00am - 18:00pm</p>
                                    <p class="location"><i class="fa fa-map-marker"></i>East Campus</p>                            
                                </div><!--//details-->
                            </div><!--event-item-->  
                            <div class="event-item">
                                <p class="date-label">
                                    <span class="month">SEP</span>
                                    <span class="date-number">06</span>
                                </p>
                                <div class="details">
                                    <h2 class="title">E-learning at College Green</h2>
                                    <p class="time"><i class="fa fa-clock-o"></i>10:00am - 16:00pm</p>
                                    <p class="location"><i class="fa fa-map-marker"></i>Learning Center</p>                            
                                </div><!--//details-->
                            </div><!--event-item-->
                            <div class="event-item">
                                <p class="date-label">
                                    <span class="month">JUN</span>
                                    <span class="date-number">23</span>
                                </p>
                                <div class="details">
                                    <h2 class="title">Career Fair</h2>
                                    <p class="time"><i class="fa fa-clock-o"></i>09:45am - 16:00pm</p>
                                    <p class="location"><i class="fa fa-map-marker"></i>Library</p>                            
                                </div><!--//details-->
                            </div><!--event-item-->
                            <div class="event-item">
                                <p class="date-label">
                                    <span class="month">May</span>
                                    <span class="date-number">17</span>
                                </p>
                                <div class="details">
                                    <h2 class="title">Science Seminar</h2>
                                    <p class="time"><i class="fa fa-clock-o"></i>14:00pm - 18:00pm</p>
                                    <p class="location"><i class="fa fa-map-marker"></i>Library</p>                            
                                </div><!--//details-->
                            </div><!--event-item-->
                            <a class="read-more" href="events.html">All events<i class="fa fa-chevron-right"></i></a>
                        </div><!--//section-content-->
                    </section><!--//events-->
                </div><!--//col-md-3-->
                <div class="col-md-6">
                    <section class="course-finder" style="padding:16px;">
                        <h1 class="section-heading text-highlight"><span class="line">History of School</span></h1>
                        <article class="news-item page-row has-divider clearfix row">       
                                <figure class="thumb col-md-2 col-sm-3 col-xs-4">
                                {!! HTML::image('assets/images/news/news-thumb-1.jpg', 'a picture', array('class' => 'img-responsive')) !!}
                                 
                                </figure>
                                <div class="details col-md-10 col-sm-9 col-xs-8">
                                    <h3 class="title"><a href="news-single.html">History of School</a></h3>
                                    <p>Morbi bibendum consectetuer, vulputate, sollicitudin, primis ullamcorper vulputate sed risus dis feugiat vel gravida, class enim Mus aliquam ut donec sodales bibendum rutrum dis sit rutrum id eleifend. Dapibus potenti.
                                    class enim Mus aliquam ut donec sodales bibendum rutrum dis sit rutrum id eleifend. Dapibus potenti.class enim Mus aliquam ut donec sodales bibendum rutrum dis sit rutrum id eleifend. Dapibus potenti.
                                    </p>
                                    <a class="btn btn-theme col-sm-3  read-more" href="news-single.html">Read more<i class="fa fa-chevron-right"></i></a>
                                </div>
                            </article>
                    </section><!--//course-finder-->

                     <section class="course-finder" style="padding:16px;">
                        <article class="news-item page-row has-divider clearfix row">       
                                <figure class="thumb col-md-2 col-sm-3 col-xs-4">
                                   {!! HTML::image('assets/images/news/news-thumb-1.jpg', 'a picture', array('class' => 'img-responsive')) !!}
                                </figure>
                                <div class="details col-md-10 col-sm-9 col-xs-8">
                                    <h3 class="title"><a href="news-single.html">Chairman Speech</a></h3>
                                    <p>Morbi bibendum consectetuer, vulputate, sollicitudin, primis ullamcorper vulputate sed risus dis feugiat vel gravida, class enim Mus aliquam ut donec sodales bibendum rutrum dis sit rutrum id eleifend. Dapibus potenti.class enim Mus aliquam ut donec sodales bibendum rutrum dis sit rutrum id eleifend. Dapibus potenti.</p>
                                    <a class="btn btn-theme col-sm-3  read-more" href="news-single.html">Read more<i class="fa fa-chevron-right"></i></a>
                                </div>
                            </article>
                    </section><!--//course-finder-->


                


                </div>
                <div class="col-md-3">
                    <section class="links">
                        <h1 class="section-heading text-highlight"><span class="line">Quick Links</span></h1>
                        <div class="section-content">
                            <p><a href="#"><i class="fa fa-caret-right"></i>E-learning Portal</a></p>
                            <p><a href="#"><i class="fa fa-caret-right"></i>Gallery</a></p>
                            <p><a href="#"><i class="fa fa-caret-right"></i>Job Vacancies</a></p>
                            <p><a href="#"><i class="fa fa-caret-right"></i>Contact</a></p>
                        </div><!--//section-content-->
                    </section><!--//links-->
                    <section class="testimonials">
                        <h1 class="section-heading text-highlight"><span class="line"> Principle's Speech</span></h1>
                    <!--     <div class="carousel-controls">
                            <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                            <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                        </div><!--//carousel-controls--> 
                        <div class="section-content">
                            <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <blockquote class="quote">                                  
                                            <p><i class="fa fa-quote-left"></i>I’m very happy interdum eget ipsum. Nunc pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.</p>
                                        </blockquote>                
                                        <div class="row">
                                            <p class="people col-md-8 col-sm-3 col-xs-8"><span class="name">Marissa Spencer</span><br /><span class="title">Curabitur commodo</span></p>
                                            {!! HTML::image('assets/images/testimonials/profile-1.png', 'a picture', array('class' => 'profile col-md-4 pull-right')) !!}

                                        </div>                               
                                    </div><!--//item-->
                                   
                                    
                                </div><!--//carousel-inner-->
                            </div><!--//testimonials-carousel-->
                        </div><!--//section-content-->
                    </section><!--//testimonials-->
                </div><!--//col-md-3-->
            </div><!--//cols-wrapper-->
          
        </div>

@stop