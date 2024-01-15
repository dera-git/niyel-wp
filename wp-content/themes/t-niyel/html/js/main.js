(function($) {
    "use strict";
    var top_header = $('.kl-header').offset().top,
    progressBarWidth = $('.kl-form-appli-progressbar').outerWidth(),
    progressActiveWidth = $('.kl-form-appli-progressbar-active');


    $(document).ready(function(){

        var elem_mansory_press = document.querySelector('.kl-grid-mansory-press');
        if(elem_mansory_press){
            elem_mansory_press.classList.remove("kl-hidden-slick");
            var msnry = new Masonry( elem_mansory_press, {
                itemSelector: '.kl-grid-item',
                percentPosition: true,
                horizontalOrder: true,
            });
        }

        if($('.kl-equal-prt').length){
            $('.kl-equal-prt').matchHeight({ property: 'min-height' });
        }

        scrollWaypointInit($('.kl-animate-scroll'));

        get_height_bg_section($('.kl-bg-section'), $('.kl-bg-section-left'));

        header_behavior();
        $(window).on("scroll", function(){
            header_behavior();
        });
        slickify_text_tag();

        /* on click scroll down + menu sector */
        anchor_link();

        slick_btn_md();
        slick_btn_lg();

        $(window).on("resize change", function () {
            slickify_text_tag();
            slick_btn_md();
            slick_btn_lg();
            get_height_bg_section($('.kl-bg-section'), $('.kl-bg-section-left'));
        });
        $('.kl-btn-toogle-navbar').click(function () {
            $(this).closest('header').toggleClass('kl-nav-open');
        });

        $('.kl-modal-video').each(function () {
            $(this).on('hidden.bs.modal', function (e) {
                $(this).find('iframe').attr("src", $(this).find('iframe').attr("src"));
            });
        })

        $('.kl-slick-expertise').on('init', function(event, slick){
            get_height_bg_section($('.kl-bg-section'), $('.kl-bg-section-left'));
        });

        $('.kl-slick-our-project').on('init', function(event, slick){
            $(this).removeClass("kl-hidden-slick");
            $(this).closest('.kl-bg-deco-right').find('.kl-bg-section').removeClass('kl-hidden-slick');
        });
        
        slick_init('.kl-slick-nav-text-full, .kl-slider-text-full-inline, .kl-slider-nav-spot, .kl-slider-spot');
        slick_init_parent('.kl-slider-vertical-one, .kl-slider-vertical-two, .kl-slider-team, .kl-slider-team-view, .kl-slider-spot, .kl-slider-real-view, .kl-slider-preview-doc');

        $('.kl-slick-nav-text-full').slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            initialSlide: 2,
            asNavFor: '.kl-slider-text-full-inline',
            dots: false,
            focusOnSelect: true,
            fade: true,
            adaptiveHeight: true,
            arrows: false,
        });

        $('.kl-slider-preview-doc').slick({
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            variableWidth: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ]
        });

        $('.kl-slider-vertical-one').slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:true,
            prevArrow: $('.kl-btn-prev-real'),
            nextArrow: $('.kl-btn-next-real'),
            fade:true,
            verticalSwiping: true,
            variableWidth: false,
            speed: 500,
            cssEase: 'ease-in-out',
            asNavFor: '.kl-nav-slider-vertical-one',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        verticalSwiping: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
            ]
        });

        $('.kl-nav-slider-vertical-one').slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            fade:true,
            variableWidth: false,
            speed: 500,
            cssEase: 'ease-in-out',
            adaptiveHeight: true,
            asNavFor: '.kl-slider-vertical-one',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        verticalSwiping: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
            ]
        });

        $('.kl-slider-vertical-two').slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:true,
            prevArrow: $('.kl-btn-prev-conf'),
            nextArrow: $('.kl-btn-next-conf'),
            fade:true,
            verticalSwiping: true,
            variableWidth: false,
            speed: 500,
            cssEase: 'ease-in-out',
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        verticalSwiping: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        variableWidth: false,
                    }
                },
            ]
        });

        $('.kl-infinite-logo.kl-left, .kl-text-defil.kl-left').infiniteslide({
            'speed': 40,
            'direction': 'right',
            'pauseonhover': true,
            'clone': 4
        });
        $('.kl-infinite-logo.kl-right, .kl-text-defil.kl-right').infiniteslide({
            'speed': 40,
            'direction': 'left',
            'pauseonhover': true,
            'clone': 4
        });

        $('.kl-slider-spot').slick({
            dots: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:true,
            variableWidth: true,
            nextArrow: $('.kl-next-arrow-spot'),
            prevArrow: null,
            asNavFor: '.kl-slider-nav-spot',
            responsive: [
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        variableWidth: false,
                        // adaptiveHeight:true,
                    }
                },
            ]
        });

        $('.kl-slider-nav-spot').slick({
            dots: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            variableWidth: false,
            asNavFor: '.kl-slider-spot',
            adaptiveHeight:true,
            fade:true,
            speed: 500,
            cssEase: 'ease-in-out',
        });

        $('.kl-slick-our-project').slick({
            slidesToShow: 1,
            arrows: false,
            dots: false,
            speed: 500,
            asNavFor: ".kl-slider-real-view",
            autoplay: true,
            autoplaySpeed: 5000,
            // fade:true,
            // cssEase: 'ease-in-out',
        });

        $('.kl-slider-real-view').slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows:false,
            variableWidth: true,
            speed: 500,
            centerMode: false,
            asNavFor: ".kl-slick-our-project",
        });

        $('.kl-slider-team-view').slick({
            dots: false,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows:true,
            variableWidth: true,
            speed: 500,
            centerMode:true,
            prevArrow: $('.kl-prev-arrow-real-view'),
            nextArrow: $('.kl-next-arrow-real-view'),
        });

        $('.kl-slider-team').slick({
            dots: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:true,
            prevArrow: $('.kl-btn-prev-team'),
            nextArrow: $('.kl-btn-next-team'),
            variableWidth: false,
            adaptiveHeight:true,
            fade:true,
            speed: 500,
            cssEase: 'ease-in-out',
            autoPlay:true,
            asNavFor: '.kl-slider-nav-team',
        });

        $('.kl-slider-nav-team').slick({
            dots: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            variableWidth: false,
            adaptiveHeight:true,
            fade:true,
            speed: 500,
            cssEase: 'ease-in-out',
            autoPlay:true,
            asNavFor: '.kl-slider-team',
        });

        //slick our expertise
        $('.kl-slick-expertise').slick({
            dots: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            autoplay: true,
            autoplaySpeed: 5000
        });
        $('div[data-slide]').click(function(e) {
            e.preventDefault();
            var slideno = $(this).data('slide');
            $('.kl-slick-expertise').slick('slickGoTo', slideno - 1);
          });

        // slick who we are
        let value_slick = $('.kl-slick-values');
        let el_text_prev = $('.kl-value-prev p');
        let el_text_next = $('.kl-value-next p');

        value_slick.slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            arrows:true,
            prevArrow: $('.kl-value-prev'),
            nextArrow: $('.kl-value-next'),
        });
        
        // On before slide change
        value_slick.on('init afterChange', function(e, slick){
            let currentSlick = $('.slick-current.slick-active', slick.$slideTrack)
            let prevName = currentSlick.prev().data('text')
            let nextName = currentSlick.next().data('text')
            
            el_text_prev.text(prevName)
            el_text_next.text(nextName)
        });
        
        let title_on_load = $('.kl-value-item.slick-current.slick-active').next();
        let title_on_load_prev = $('.kl-value-item:last-child');
        setTimeout(() => {
            $('.kl-value-next p').text(title_on_load.data('text'))
            $('.kl-value-prev p').text(title_on_load_prev.data('text'))
          }, 500);

          /**filtre categorie */
          filterCategories();

          /**calcul padding container & body page impact */
          let container = $('#id-container-other').width()
          let body = $("body").width()
          let padding = $('#id-container-other').css("padding-left")
          let body_padding = $('.kl-bg-body').css("padding-left")
          let val_padding = parseInt(padding)
          let val_body_padding = parseInt(body_padding)
          let margin = (body - container - ((val_padding * 2) + (val_body_padding * 2))) / 2 ;

          $(window).on("load", function(){
              $('.kl-variable-width').css("width", margin)
          })

          $(window).resize(function() {
            let container = $('#id-container-other').width()
            let body = $("body").width()
            let padding = $('#id-container-other').css("padding-left")
            let body_padding = $('.kl-bg-body').css("padding-left")
            let val_padding = parseInt(padding)
            let val_body_padding = parseInt(body_padding)
            let margin = (body - container - ((val_padding * 2) + (val_body_padding * 2))) / 2 ;

            $('.kl-variable-width').css("width", margin);

          });

          /**end calcul padding container & body page impact */

          /** arrow scroll */
          $(document).scroll(function(){
            $('.kl-scroll-arrow').removeClass("d-none")
          })

          /**filter impact */
          filterImpact();

          $('.kl-player-video').on("click", function(){
            $(this).addClass("d-none");
            $('.kl-img-principale').addClass('d-none');
            $('.kl-video-approach').removeClass('d-none');
            $('.kl-video-approach')[0].play();;
          });

          /**join us */

          $('.kl-request-list').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows:false,
            variableWidth: false,
            responsive: [
                {
                  breakpoint: 991,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                  }
                }
              ]
          })

          progressActiveWidth.css("width", progressBarWidth);
          
          $('.kl-slider-real-view-2').slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            variableWidth: false,
            speed: 500,
            centerMode: true,
        });

    });

    $(window).on('resize orientationchange', function(){
        progressBarWidth = $('.kl-form-appli-progressbar').outerWidth();

        console.log("resize", progressBarWidth);
        progressActiveWidth.css("width", progressBarWidth);
    })

    function header_behavior() {
        var sticky = $('header'),
            scroll = $(window).scrollTop(),
            sticky_offset = 0;

        scroll > sticky_offset ? sticky.addClass('kl-fixed') : sticky.removeClass('kl-fixed');
    }

    function slick_vertical_init(element){
        $(element).slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            fade:true,
            verticalSwiping: true,
            variableWidth: false,
            speed: 500,
            cssEase: 'ease-in-out',
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        verticalSwiping: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        variableWidth: false,
                    }
                },
            ]
        });
    }

    function slickify_text_tag() {
        $('.kl-slider-text-full-inline').each(function(){
            var $carousel = $(this);
            if ($(window).width() > 767) {
                if ($carousel.hasClass('slick-initialized')) {
                    $carousel.slick('unslick');
                }
            }
            else{
                if (!$carousel.hasClass('slick-initialized')) {
                    $carousel.slick({
                        dots: false,
                        infinite: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        variableWidth: true,
                        arrows:true,
                        nextArrow: $('.kl-next-arrow-txt'),
                        initialSlide: 3,
                        asNavFor: '.kl-slick-nav-text-full',
                    });
                }
            }
        });
    }

    function slick_btn_md(){
        $('.kl-slider-md-btn').each(function(){
            var $carousel_btn = $(this);
            if ($(window).width() > 767) {
                if ($carousel_btn.hasClass('slick-initialized')) {
                    $carousel_btn.slick('unslick');
                }
            }
            else{
                if (!$carousel_btn.hasClass('slick-initialized')) {
                    $carousel_btn.slick({
                        dots: false,
                        infinite: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false,
                        variableWidth: true,
                        arrows:false,
                    });
                }
            }
        });
    }

    function slick_btn_lg(){
        $('.kl-slider-lg-btn').each(function(){
            var $carousel_btn = $(this);
            if ($(window).width() > 991) {
                if ($carousel_btn.hasClass('slick-initialized')) {
                    $carousel_btn.slick('unslick');
                }
            }
            else{
                if (!$carousel_btn.hasClass('slick-initialized')) {
                    $carousel_btn.slick({
                        dots: false,
                        infinite: false,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        centerMode: false,
                        variableWidth: true,
                        arrows:false,
                        responsive: [
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
                                }
                            },
                        ]
                    });
                }
            }
        });
    }

    function slick_init(element){
        $(element).on('init', function(event, slick){
            $(this).removeClass("kl-hidden-slick");
        });
    }

    function slick_init_parent(element){
        $(element).on('init', function(event, slick){
            $(this).closest('.kl-hidden-slick').removeClass("kl-hidden-slick");
        });
    }

    /* animate anchor on click */
    function anchor_link(){
        $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    &&
                    location.hostname == this.hostname
                ) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top - 100
                        }, 500, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });
    }

    /* animate general */
    function scrollWaypointInit( items, trigger ) {
        items.each( function() {
            var element = jQuery(this),
                osAnimationClass = element.data("animation"),
                osAnimationDelay = element.attr('data-animation-delay');
            element.css({
                '-webkit-animation-delay':  osAnimationDelay,
                '-moz-animation-delay':     osAnimationDelay,
                'animation-delay':          osAnimationDelay
            });
            var trigger = ( trigger ) ? trigger : element;
            trigger.waypoint(function() {
                element.addClass('animate__animated').addClass(osAnimationClass);
            },{
                // triggerOnce: true,
                offset: '80%'
            });
        });
    }

    function filterCategories(){
        $('.kl-nav-filter-content li a').click(function() {
            var valueClass = $(this).data('value');

            $('.kl-nav-filter-content li a').removeClass('active');
            $(this).addClass('active');

            $('#id-categories').children('div:not(.' + valueClass + ')').hide();

            $('#id-categories').children('div.' + valueClass).show();

            if(! $('#id-categories').children('div').is(":visible") > 0) {
                $('.kl-empty-filterd').removeClass('d-none')
            } else {
                $('.kl-empty-filterd').addClass('d-none')
            }

        });
    }

    function get_height_bg_section(el, parent){
        $(el).each(function () {
            var height_section = $(this).closest(parent).find('.kl-height-bg-section').outerHeight(),
                total_height_value = height_section + 40;
            if($(this).closest(parent).length){
              var  top_section = $(this).closest(parent).find('.kl-height-bg-section').position().top - 40;
            }
            $(this).css("top", top_section);
            $(this).css("height", total_height_value);
        });
    }

    function filterImpact(){
        $('.kl-item-other-projetc li a').click(function() {
            var valueClass = $(this).data('value');

            $('.kl-item-other-projetc li a').removeClass('active');
            $(this).addClass('active');

            $('#id-impact').children('div:not(.' + valueClass + ')').hide(300);

            $('#id-impact').children('div.' + valueClass).show(300);

            if(! $('#id-impact').children('div').is(":visible") > 0) {
                $('.kl-empty-filterd').removeClass('d-none')
            } else {
                $('.kl-empty-filterd').addClass('d-none')
            }

        });
    }

})(jQuery);