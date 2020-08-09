(function($){
    'use strict';

    $(window).on('load', function() {
        //preloader
        $('.preloader').hide();
    });

    $(document).ready(function() {

        // scrollTop
        $(".nav-icon").on('click', function(){
            $('.main-menu').stop(true, false, true).slideToggle(300);
        });
        // scrollTop
        $(".scrolltotop").on('click', function(){
            $("html,body").animate({'scrollTop' : '0'}, 500);
            return false;
        });

        $(window).scroll( function() {
            var windowpos = $(window).scrollTop();
            if( windowpos >= 50 ) {
                $("a.scrolltotop").fadeIn();
            }
            else {
                $("a.scrolltotop").fadeOut();
            }
        });

        $('.popup-video').magnificPopup({
            // type: 'iframe'
            type: 'image'
        });

        new WOW().init();

        // concern-features + upcoming-projects
        $(".concern-features, .upcoming-projects").owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                576:{
                    items:2,
                    nav:false
                },
                992:{
                    items:3,
                    nav:false
                }
            }
        });

        // our-clients
        $(".our-clients").owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    nav:false
                },
                576:{
                    items:3,
                    nav:false
                },
                992:{
                    items:5,
                    nav:false
                }
            }
        });

        // our-clients
        $(".cylinder-slider").owlCarousel({
            loop:true,
            responsiveClass:true,
			items: 1,
			nav:false,
			autoplay:true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			smartSpeed:450

        });

        // Submenu SlideToggle
        $('ul.sub-menu').parent('li').addClass('has-childern').children("a").append('<i class="fa fa-angle-down"></i>');

        // media query


        if ($(window).width() > 575) {
            $("ul.main-menu li").hover(function() {
                $(this).children('ul.sub-menu').stop(true, false, true).slideToggle(300);
            });
        }
        else {
            $('ul.main-menu>li>a>i').click(function(e) {
                e.preventDefault();
                $(this).parent("ul.main-menu li a").parent("ul.main-menu li").children('ul.sub-menu').stop(true, false, true).slideToggle(300);
            });
        }

        // .portfolio
        if($('.portfolio').length > 0){
            var containerEl = document.querySelector('.portfolio');

            var mixer = mixitup(containerEl);
        }



        $(document).on('click','.not-run .btn-sfsubmit', function(e){
            e.preventDefault();
            $(this).siblings('.form-control').addClass('active')
            .parents('.search-form').removeClass('not-run').addClass('run');
        });


        $(document).mouseup(function(e) {
            var selectorForm = $(".search-form");

            if (!selectorForm.is(e.target) && selectorForm.has(e.target).length === 0)
            {
                if(selectorForm.hasClass('run')){
                    selectorForm.removeClass('run').addClass('not-run').find('.form-control').removeClass('active');
                }
            }
        });




        $('.map-bn text').hover( function(){

            var zillaclass = $(this).text();
            $(this).addClass(zillaclass);

            $(this).addClass('active');
            $(document).find('.'+zillaclass).delay(500).addClass('active');

        }, function(){

            var zillaclass = $(this).text();
            $(this).removeClass('active');
            $(document).find('.'+zillaclass).delay(500).removeClass('active');

        });

        $('.map-bn .zilla').hover( function(){
            $(this).addClass('active');
        }, function(){
            $(this).removeClass('active');
        });




    });

})(jQuery);




