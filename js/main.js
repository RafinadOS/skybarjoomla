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

    $('.shared__icon-plus').click(function(e){
        $('body').toggleClass('show-shared');
        return false;
    });

});