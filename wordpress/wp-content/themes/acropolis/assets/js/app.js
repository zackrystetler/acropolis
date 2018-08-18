//google maps api key = AIzaSyBG216dT96u7KshkH0Udl-jmYMu-QLgaa4

jQuery(document).ready(function($) {

    //smooth scrolling to anchors
    $('header a[href^="#"], .smooth[href^="#"]').each(function() {
        $(this).on('click', function(e) {
            e.preventDefault();
            const goto = $(this.getAttribute('href'));
            const headerHeight = $('header').height();
            const gotoPos = goto.offset().top-headerHeight;

            $('html, body').animate({
                scrollTop: gotoPos
            }, 1000);
        })
    })

    //fade in feature
    const fadeIn = (elem, speed, offset) => {
        const $elem = $(elem);
        $elem.css('opacity', '0');
        $(window).scroll(function() {
            let windowTop = $(this).scrollTop();
            let windowBottom = windowTop + $(this).height();
        
            $.each($elem, function() {
                const elemTop = this.offsetTop;
                if (windowBottom > elemTop + offset) {
                    $(this).animate({'opacity':'1'},speed);
                }            
            })
        });
    }

    fadeIn('.fade', 1000, 100);


    //nav view on mobile
    $('#menuButton').on('click', function() {
        $('nav').toggleClass('active');
    })

    $('nav').on('click', function() {
        $('nav').removeClass('active');
    })

    //menu functionality
    function activateMenu(menu) {
        const link = menu.replace(/\W/g, '');
        $('a[href^="#'+ link + '"]').addClass('active').parent().siblings().children().removeClass('active');
        $('#locationMenu.' + link).addClass('active').siblings().removeClass('active');
    }

    $('#locations #press-hall-card #button').on('click', function() {
        activateMenu('pressHallMenu');
    })

    $('#locations #strathmore-card #button').on('click', function() {
        activateMenu('strathmoreMenu');
    })

    $('#menu #tabs a').on('click', function(e) {
        e.preventDefault();
        activateMenu(this.getAttribute('href'));
    })

    $('#menu-page #tabs a').on('click', function(e) {
        e.preventDefault();
        activateMenu(this.getAttribute('href'));
    })



});