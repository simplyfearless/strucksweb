$(document).ready(function() {
    $(".down").click(function(event){
        $('html, body').animate({scrollTop: '+=250px'}, 800);
    });
    var adjuster = ($(window).height() / 2) - ($('.full-screen .row').height() / 2) - ($('.site-header').height() / 2) - 10 + 'px';
    $('.full-screen').css({"padding-top" : adjuster});
    $('.full-screen').css({"padding-bottom" : adjuster});
    $(window).resize(function() {
        var adjuster = ($(window).height() / 2) - ($('.full-screen .row').height() / 2) - ($('.site-header').height() / 2) - 10 + 'px';
        $('.full-screen').css({"padding-top" : adjuster});
        $('.full-screen').css({"padding-bottom" : adjuster});
    });
});