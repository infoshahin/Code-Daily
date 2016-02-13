<!-- Stored in resources/views/layouts/child.blade.php -->

@extends('master')

@section('title', 'Home')



@section('home')
 <header id="header_two">
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide animated bounceInLeft" src="images/slide/website_development.png" alt="Website Development">
          <div class="container">
            <div class="carousel-caption" data-animation="animated zoomInLeft">
              <!-- <h1>Website Development</h1> -->
            <!--   <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide animated bounceInRight" src="images/slide/software_development.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <h1>Software Development</h1> -->
              <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide animated bounceInDown" src="images/slide/ecommerce.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <h1>E - Commerce Development</h1> -->
              <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
            </div>
          </div>
        </div>

        <div class="item">
          <img class="third-slide animated zoomInLeft" src="images/slide/seo.png" alt="Four slide">
          <div class="container">
            <div class="carousel-caption">
            
            </div>
          </div>
        </div>


      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
</header>

  <div class="container footer">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              
                <h1>Greetings From Team Belogin</h1>
                 <p align="justify"> 
                
              Honesty, transparency, best quality, superior innovation, fair pricing are the core competencies of Belogin Technologies Ltd. We listen to the valuable clients, understand their demand and provide best solutions that fit to them. We value all the customers and our customers are the reflection of our promising words.

<br><br>Visit Belogin Technologies Ltd. and enjoy our services and be proud to tell others!
 
</p>
                </div>     
        </div>
    </div>

@endsection