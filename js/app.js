//ig client id=7fcf52f7bdc046bdadad9fdd9b735f25

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

//clean up map (remove ui)

//menu funcktionality

//instafeed