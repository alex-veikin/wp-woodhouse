if (module.hot) {
    module.hot.accept();
}

import './scss/app.scss';
import './bootstrap.bundle.min';
import 'owl.carousel';

$(document).ready(function(){

    $(window).scroll(function () {
        let topMenu = $('.header-top .container .row .navbar');
        if($(window).scrollTop() >= $('.header-top').height()) {
            topMenu.addClass('navbar-hide');
        } else {
            topMenu.removeClass('navbar-hide');
        }

        if($(window).scrollTop() >= $('.header').height()) {
            topMenu.addClass('navbar-show');
        } else {
            topMenu.removeClass('navbar-show');
        }

        if ($(window).scrollTop() === 0) {
            topMenu.removeClass('navbar-show');
            topMenu.removeClass('navbar-hide');
        }
    });



    $('.image-select').click(function () {
        $('.image-selected').attr('src', $(this).attr('src'));
        $('.image-select').not($(this)).removeClass('border-primary');
        $(this).addClass('border-primary');
    });


    // function exampleHeight() {
    //     let items = $('.example-content');
    //     let max = 0;
    //     items.each(function() {
    //         let h = $(this).height();
    //         max = h > max ? h : max;
    //     });
    //
    //     items.height(max);
    // }
    //
    // exampleHeight();
    //
    // $(window).resize(function () {
    //     exampleHeight();
    // });



    $('.owl-carousel').owlCarousel({
        autoplay: true,
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            992:{
                items:2
            }
        }
    });

});