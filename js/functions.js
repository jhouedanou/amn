// jQuery for Drupal 7 [BEGIN]
(function ($) {
$(window).resize(function(){
     var winWidth = $(window).width();
        var winHeight = $(window).height();
        $('.flank').css({
            'height': winHeight
        });

});
    $(document).ready(function() {
        jQuery('#ecran1').parallax("50%", 0.1);
        jQuery('#ecran2').parallax("50%", 0.3);
        var winWidth = $(window).width();
        var winHeight = $(window).height();
        $('.flank').css({
            'height': winHeight
        });
           ///     $("html").niceScroll({cursorcolor:"#868686"});

    });
// jQuery for Drupal 7 [END]
}(jQuery));

(function ($) {
$.fn.vAlign = function() {


};
})(jQuery);