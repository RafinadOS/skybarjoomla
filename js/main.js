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

$(document).ready(function($) {
    $('.overlay').removeClass('overlay-show');

    $('.shared__icon-plus').click(function(){
        $('body').toggleClass('show-shared');
        $('.overlay').toggleClass('overlay-show');
        return false;
    });
    $('.overlay').click(function() {
        $(this).removeClass('overlay-show');
        $('body').toggleClass('show-shared')
    });

});