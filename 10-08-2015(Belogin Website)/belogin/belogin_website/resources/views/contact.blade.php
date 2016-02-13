@extends('master')

@section('title', 'Contact')



@section('contact')
<section id="map">
    <div id="container-fluid" style="background-color: #22313F">
        <a href="#" id="map-tigger" class="btn" style="background-color: #ec6464; color:white;">Show Map</a>

        <div class="row">
            <div id="googleMap" class="show-map col-xs-12" style="width:100%;"><iframe id="mapcustom" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d913.0588476425089!2d90.41515811043092!3d23.738983959216146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b86081d2c8ef%3A0x35d17854bd7d0dc8!2sEastern+Plus+Shopping+Mall!5e0!3m2!1sen!2sbd!4v1433317678956" width="100%" height="400" frameborder="0" style="border:0"></iframe></div>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="container footer">
        <div class="row">
            <div class="col-sm-4">
                <h3>Find Us on Social Media</h3>
                <div class="social-icon">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/blgntech" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<!--                        <li><a href="" title="Twitter"><i class="fa fa-twitter"></i></a></li><li>-->
                        <li><a target="_blank" href="https://www.linkedin.com/company/9370873" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li><li>
<!--                        <li><a href="" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>-->
<!--                        <li><a href="" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>-->
<!--                        <li><a href="" title="Drbbble"><i class="fa fa-dribbble"></i></a></li>-->
<!--                        <li><a href="" title="Behance"><i class="fa fa-behance"></i></a></li>-->
                    </ul>
                </div>
                <br>
                <div class="subscriber">
                    <p>Subscribe to know our latest services, Run with the flow of Latest Technology</p>
                    <form action="" method="post" class="form-inline">
                        <input type="text" class="form-control" name="subscribe" placeholder="Enter Your Email"><input type="submit" class="form-control btn btn-danger" value="Subscribe" name="subscribe"/>
                    </form>
                </div>
            </div>

<!--            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 service-list">-->
<!--                <h3>Service</h3>-->
<!--                <ul>-->
<!--                    <li><a href="">Web Development</a></li>-->
<!--                    <li><a href="">Software Development</a></li>-->
<!--                    <li><a href="">Apps Development</a></li>-->
<!--                    <li><a href="">SEO</a></li>-->
<!--                </ul>-->
<!--            </div>-->
            <div class="col-sm-4 contact">
                <h3>Contact Us</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="Email" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Enter Your Message"></textarea>
                    </div>
                    <input type="submit" class="btn btn-danger form-control" name="send" value="Send">
                </form>
            </div>
            <div class="col-sm-4 address">
                <h3>Address</h3>
                <ul>
                    <li > <i class="fa fa-map-marker fa-3x"></i> <span>Eastern Plus Shopping Mall,145 Shanti Nagar Road,Dhaka-1217.</span></li>
                    <li> <i class="fa fa-phone fa-2x"></i><span>+88 02 93436078 </span></li>
                    <li> <i class="fa fa-mobile fa-2x"> </i><span>+88 01706613133<br> +88 01706613134<br></span></li>
                    <li> <i class="fa fa-envelope-o fa-2x"></i> <span> info@belogin.com</span></li>
                    <li> <i class="fa fa-globe fa-2x"></i> <a target="_blank" href="http://belogin.com" <span>www.belogin.com</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--end footer -->
</div>
</div>
</div>



@endsection