//google maps api key = AIzaSyBG216dT96u7KshkH0Udl-jmYMu-QLgaa4


//smooth scrolling to anchors
$('a[href^="#"]').each(function() {
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

//nav view on mobile
$('#menuButton').on('click', function() {
    $('nav').toggleClass('active');
})

$('nav').on('click', function() {
    $('nav').removeClass('active');
})

//menu functionality
function activateMenu(menu) {
    console.log(menu);
    $('a[href^="'+ menu + '"]').addClass('active').parent().siblings().children().removeClass('active');
    $('#locationMenu.' + menu).addClass('active').siblings().removeClass('active');
}

$('#locations #pressHallCard #button').on('click', function() {
    activateMenu('pressHallMenu');
})

$('#locations #strathmoreCard #button').on('click', function() {
    activateMenu('strathmoreMenu');
})

$('#menu #tabs a').on('click', function(e) {
    e.preventDefault();
    activateMenu(this.getAttribute('href'));
})

$('#menuSections a').on('click', function(e) {
    e.preventDefault();
    $(this).addClass('active').parent().siblings().children().removeClass('active');

    const section = this.getAttribute('href');
    $(this).parent().parent().siblings('#menuItems.' + section).addClass('active').siblings().removeClass('active');
})