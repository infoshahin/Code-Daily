@extends('layouts.frontend.frontend')
<title>{{ trans('lang.home') }}</title>
@section('content')
 <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">{{ trans('lang.aboutus') }}</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="{{URL::to($lang.'/home')}}">{{ trans('lang.home') }}</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">{{ trans('lang.aboutus') }}</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <article class="welcome col-md-8 col-sm-7">                         
                            <h3 class="title">{{ trans('lang.about_history_title') }}</h3>
                            <?php echo trans('lang.about_history');?>
                       

                        </article><!--//page-content-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">                    
                            <section class="widget has-divider">
                                <h3 class="title">Job Vacancies</h3>
                                <ul class="job-list custom-list-style">
                                    <li><i class="fa fa-caret-right"></i><a href="#">Learning Support Assistant</a></li>
                                    <li><i class="fa fa-caret-right"></i><a href="#">Lecturer - Business Studies</a></li>
                                    <li><i class="fa fa-caret-right"></i><a href="#">Lecturer - Computer Science</a></li>
                                    <li><i class="fa fa-caret-right"></i><a href="#">Administrative Assistant</a></li>
                                </ul>
                                <a class="btn btn-theme" href="jobs.html">Find out more</a>
                            </section><!--//widget--> 
                          <!--   <section class="widget has-divider">
                                <h3 class="title">Video tour</h3>
                                <iframe class="iframe" src="http://www.youtube.com/embed/Ks-_Mh1QhMc?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen=""></iframe>
                            </section><!--//widget--> 
                            <section class="widget">
                                <h3 class="title">Contact</h3>
                                <p>Suspendisse mollis neque augue, vitae malesuada mi dictum quis. Ut mollis purus vel orci aliquam sagittis. Aliquam erat volutpat. </p>
                                <p class="tel"><i class="fa fa-phone"></i>Tel: 0800 123 4567</p>
                                <p class="email"><i class="fa fa-envelope"></i>Email: <a href="#">enquires@website.com</a></p>
                            </section><!--//widget--> 
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->

@stop