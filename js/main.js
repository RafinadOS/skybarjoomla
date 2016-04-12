$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    responsive:{
        0:{
            items:1
        }
    }
});
$('.inst-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:3
        },
        500:{
            items:4
        },
        600:{
            items:5
        },
        980:{
            items:8
        },
        1200:{
            items:6
        },
        1600:{
            items:9
        }
    }
});

$(document).ready(function($) {
    $('.overlay').removeClass('overlay-show');

    $('.shared__icon-plus').click(function(){
        $('body').toggleClass('show-shared');
        $('.overlay').toggleClass('overlay-show');
        return false;
    });
    $('.instagramm-scroll__wrapper-show').click(function(e) {
        $('body').toggleClass('instagramm-scroll-show');
        $('.overlay').toggleClass('overlay-show');
        return false;
    });
    $('.footer__text-newsletter').click(function(e) {
        $('#newsletter').toggleClass('md-show');
        $('.overlay').toggleClass('overlay-show');
        $('.overlay').toggleClass('overlay-bg');
        return false;
    });

     $('.footer__text-callback').click(function(e) {
        $('#callback').toggleClass('md-show');
        $('.overlay').toggleClass('overlay-show');
        $('.overlay').toggleClass('overlay-bg');
        return false;
    });

    $('.md-content__close').click(function(e) {
        $('#newsletter').removeClass('md-show');
        $('#callback').removeClass('md-show');
        $('.overlay').removeClass('overlay-show');
        $('.overlay').removeClass('overlay-bg');
        return false;
    });

    $('.header-menu__open').click(function(e){
        $('body').toggleClass('header-menu__open-hide');
        $('.overlay').toggleClass('overlay-show');
        return false;
    });

    $('.overlay').click(function() {
        $(this).removeClass('overlay-show');
        $(this).removeClass('overlay-bg');
        $('body').removeClass('show-shared');
        $('body').removeClass('instagramm-scroll-show');
        $('body').removeClass('header-menu__open-hide');
        $('#newsletter').removeClass('md-show');
        $('#callback').removeClass('md-show');
    });

    var wbody = $('body').width();
    $('.content-article__image').width(wbody);

    $('.md-content__input').focus(function() {
        $(this).removeClass('rsform-error');
    });

    

});