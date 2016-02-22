
/* ==============================================
slide 
=============================================== */

//jQuery(document).ready(function ($) {
//            
//            var jssor_1_options = {
//              $AutoPlay: true,
//              $ArrowNavigatorOptions: {
//                $Class: $JssorArrowNavigator$
//              },
//              $ThumbnailNavigatorOptions: {
//                $Class: $JssorThumbnailNavigator$,
//                $Cols: 5,
//                $SpacingX: 5,
//                $SpacingY: 1,
//                $Orientation: 2,
//			
//                $Scale:true,
//                $AutoCenter:1,
//				$ArrowKeyNavigation:1,
//                $Align: 0
//              }
//            };
//            
//            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
//            
//            //responsive code begin
//            //you can remove responsive code if you don't want the slider scales while window resizes
//            function ScaleSlider() {
//                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
//                if (refSize) {
//                    refSize = Math.min(refSize);
//                    jssor_1_slider.$ScaleWidth(refSize);
//                }
//                else {
//                    window.setTimeout(ScaleSlider, 30);
//                }
//            }
//            ScaleSlider();
//            $(window).bind("load", ScaleSlider);
//            $(window).bind("resize", ScaleSlider);
//            $(window).bind("orientationchange", ScaleSlider);
//            //responsive code end
//        });
//



/* ==============================================
Back To Top Button
=============================================== */

$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#back-top').fadeIn();
    } else {
        $('#back-top').fadeOut();
    }
});
// scroll body to 0px on click
$('#back-top').click(function () {
    $('#back-top a').tooltip('hide');
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
});

$('#back-top').tooltip('hide');
$(document).ready(function(){
    //$('.hot-deal-list li').hide();
    var num_list=$('.hot-deal-list li').length;
    $('.hot-deal-list li:nth-child(1n+4)').hide();
	
	
	
    $('.hot-deal').mouseleave(function(){
        $(this).find('.hot-deal-list li:nth-child(1n+4)').hide();
		
        $(this).removeClass('hot-deal1');
		
    });
    $('.hot-deal').mouseenter(function(){
        $(this).find('.hot-deal-list li:nth-child(1n+4)').show();
        $(this).addClass('hot-deal1');
		
    });
        
        
        
    //          fancybox
    $(document).ready(function() {
        $('.fancybox').fancybox();
    });
})



