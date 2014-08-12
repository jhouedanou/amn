// jQuery for Drupal 7 [BEGIN]
(function ($) {

$(document).ready(function() {
    $(window).resize(function(){
         var winWidth = $(window).width();
            var winHeight = $(window).height();
            $('.flank').css({
                'height': winHeight
            });
    });
     
        var winWidth = $(window).width();
        var winHeight = $(window).height();
        var nbHeight = $("#menucontainer").css('height');
        //alert(nbHeight);
        
        var bottomBar = winHeight - nbHeight;
        //alert(bottomBar);
        $('.flank').css({
            'height': winHeight
        });
        var bg1 = $("#ecran1").css('background-image');
            bg1 = bg1.replace('url("','').replace('")','');
            $('#ecran1').anystretch(bg1);
         var bg2 = $("#ecran2").css('background-image');
            bg2 = bg2.replace('url("','').replace('")','');
            $('#ecran2').anystretch(bg2, {speed: 150});
  
        $("html").niceScroll({cursorcolor:"#868686"});

          var controller = new ScrollMagic({
                globalSceneOptions: {
                   triggerHook: "onLeave"
                }
             });
            // pinani
var pinani = new TimelineMax()
    // balayage ecran 2
    .add(TweenMax.to("#ecran2", 1, {transform: "translateY(0    )"}))

// panel section pin
new ScrollScene({
        triggerElement: "#ecran1",
        duration: 1100
    })
    .setTween(pinani)
    .setPin("#ecran1")
    .addTo(controller);
            var scene = new ScrollScene();
            scene.addTo(controller);
 });
//navbar
    $(window).scroll(function() {
                var winWidth = $(window).width();
        var winHeight = $(window).height();

      var scrollTop = winHeight;
      if($(window).scrollTop() >= scrollTop){
            $('#menucontainer').addClass('fixed');
       }else{
            $('#menucontainer').removeClass('fixed');	
       }
     });

// jQuery for Drupal 7 [END]

}(jQuery));

(function ($) {
$.fn.vAlign = function() {


};
})(jQuery);