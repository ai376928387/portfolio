var mr_firstSectionHeight,
    mr_nav,
    mr_navOuterHeight,
    mr_navScrolled = false,
    mr_navFixed = false,
    mr_outOfSight = false,
    mr_floatingProjectSections,
    mr_scrollTop = 0;
    
$(document).ready(function() {
    

    // Navigation

    if (!$('nav').hasClass('fixed') && !$('nav').hasClass('absolute')) {

        // Make nav container height of nav

        $('.nav-container').css('min-height', $('nav').outerHeight(true));

        $(window).resize(function() {
            $('.nav-container').css('min-height', $('nav').outerHeight(true));
        });

        // Compensate the height of parallax element for inline nav

        if ($(window).width() > 768) {
            $('.parallax:nth-of-type(1) .background-image-holder').css('top', -($('nav').outerHeight(true)));
        }

        // Adjust fullscreen elements

        if ($(window).width() > 768) {
            $('section.fullscreen:nth-of-type(1)').css('height', ($(window).height() - $('nav').outerHeight(true)));
        }

    } else {
        $('body').addClass('nav-is-overlay');
    }

    if ($('nav').hasClass('bg-dark')) {
        $('.nav-container').addClass('bg-dark');
    }


    // Fix nav to top while scrolling

    mr_nav = $('body .nav-container nav:first');
    mr_navOuterHeight = $('body .nav-container nav:first').outerHeight();
    window.addEventListener("scroll", updateNav, false);

    // Mobile Menu

    $('.mobile-toggle').click(function() {
        $('.nav-bar').toggleClass('nav-open');
        $(this).toggleClass('active');
    });

    $('.menu li').click(function(e) {
        if (!e) e = window.event;
        e.stopPropagation();
        if ($(this).find('ul').length) {
            $(this).toggleClass('toggle-sub');
        } else {
            $(this).parents('.toggle-sub').removeClass('toggle-sub');
        }
    });

    $('.module.widget-handle').click(function() {
        $(this).toggleClass('toggle-widget-handle');
    });

    $('.search-widget-handle .search-form input').click(function(e) {
        if (!e) e = window.event;
        e.stopPropagation();
    });

    // Offscreen Nav
    
    if($('.offscreen-toggle').length){
        $('body').addClass('has-offscreen-nav');
    }
    else{
        $('body').removeClass('has-offscreen-nav');
    }
    
    $('.offscreen-toggle').click(function(){
        $('.main-container').toggleClass('reveal-nav');
        $('nav').toggleClass('reveal-nav');
        $('.offscreen-container').toggleClass('reveal-nav');
    });
    
    $('.main-container').click(function(){
        if($(this).hasClass('reveal-nav')){
            $(this).removeClass('reveal-nav');
            $('.offscreen-container').removeClass('reveal-nav');
            $('nav').removeClass('reveal-nav');
        }
    });
    
    $('.offscreen-container a').click(function(){
        $('.offscreen-container').removeClass('reveal-nav');
        $('.main-container').removeClass('reveal-nav');
        $('nav').removeClass('reveal-nav');
    });


    function updateNav() {

        var scrollY = mr_scrollTop;

        if (scrollY <= 0) {
            if (mr_navFixed) {
                mr_navFixed = false;
                mr_nav.removeClass('fixed');
            }
            if (mr_outOfSight) {
                mr_outOfSight = false;
                mr_nav.removeClass('outOfSight');
            }
            if (mr_navScrolled) {
                mr_navScrolled = false;
                mr_nav.removeClass('scrolled');
            }
            return;
        }

        if (scrollY > mr_firstSectionHeight) {
            if (!mr_navScrolled) {
                mr_nav.addClass('scrolled');
                mr_navScrolled = true;
                return;
            }
        } else {
            if (scrollY > mr_navOuterHeight) {
                if (!mr_navFixed) {
                    mr_nav.addClass('fixed');
                    mr_navFixed = true;
                }

                if (scrollY > mr_navOuterHeight * 2) {
                    if (!mr_outOfSight) {
                        mr_nav.addClass('outOfSight');
                        mr_outOfSight = true;
                    }
                } else {
                    if (mr_outOfSight) {
                        mr_outOfSight = false;
                        mr_nav.removeClass('outOfSight');
                    }
                }
            } else {
                if (mr_navFixed) {
                    mr_navFixed = false;
                    mr_nav.removeClass('fixed');
                }
                if (mr_outOfSight) {
                    mr_outOfSight = false;
                    mr_nav.removeClass('outOfSight');
                }
            }

            if (mr_navScrolled) {
                mr_navScrolled = false;
                mr_nav.removeClass('scrolled');
            }

        }
    }
});