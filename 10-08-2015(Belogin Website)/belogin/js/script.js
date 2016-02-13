//----------------SCROLL TO TOP------------------
$(document).ready(function () {
    $('body').prepend("<a href='#' class='back-to-top'><i class='fa fa-chevron-up'></i></a>");
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            $('a.back-to-top').fadeIn('fast');
        }
        else {
            $('a.back-to-top').fadeOut('fast');
        }

    });
    //----smooth scroll top 0px
    $('.back-to-top').click(function (e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});
//---------------slide--------------
jQuery(document).ready(function () {
    $('#da-slider').cslider({
        autoplay: true,
        interval: 3000,
        bgincrement: 10
    });
});
//------------------end slide----------
// ------------start isotope----------
$(window).load(function () {
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('.portfolioFilter a').click(function () {

        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});

//---------------end isotope----------
//---------------start scroll-top----------

jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top-60}, 1200);
    });
});
$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        $('#navbar').addClass('navbar-fixed-top');
        if ($('#sidebar').hasClass('sidebar-close')) {
            $('#navbar').addClass('navbar-left');
        }
        else {
            $('#navbar').removeClass('navbar-left');
        }
    }
    else {
        $('#navbar').removeClass('navbar-fixed-top');
        $('#navbar').removeClass('navbar-left', 1000);
    }

});
//----------menu---------------
$(document).ready(function () {
    $(".navbar-nav li").click(function () {
        $(".navbar-nav li").removeClass('active');
        $(this).addClass('active');
    });

    $("#navbar-toggle").click(function () {
        $('body').toggleClass('body');
        $('#sidebar').toggleClass('sidebar-close');
        if ($('#navbar').hasClass('navbar-fixed-top')) {
            $('#navbar').removeClass('navbar-left');
        }
        if ($('#sidebar').hasClass('sidebar-close') && $('#navbar').hasClass('navbar-fixed-top')) {
            $('#navbar').addClass('navbar-left');

        }
        else {
            $('#navbar').removeClass('navbar-left');
        }

    });

});



//----------menu---------------
//-------------scroll spay--------------
$('body').scrollspy({target: "#sidebar"});

//-----------service over box------------

$('.hover-box').delegate('#view-service', 'click', function (e) {
    e.preventDefault();
    $('#over-service').fadeIn('slow');
});

$('.close-icon').click(function (e) {
    e.preventDefault();
    $('#over-service').fadeOut('slow');

});
//$('.portfolioFilter li a').mouseover(function () {
//        $(this).addClass('animated fadeIn');
//});
//$('.portfolioFilter li a').mouseout(function () {
//        $(this).removeClass('animated fadeIn');
//});
//-----------------mpa-------------

$('#map-tigger').click(function(e){
    // e.preventDefault();
         $('#googleMap').slideToggle('slow');
         if($(this).html()==="Show Map"){
             $(this).html("Hide Map");
         }
         else{
             $(this).html("Show Map");
         }
});
$(document).ready(function() {
   $('#googleMap').slideToggle('slow');
    $('#map-tigger').html("Hide Map");
});


