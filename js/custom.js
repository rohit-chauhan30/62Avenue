$(window).on('load', function () {
    $('.loader').fadeOut();
    $('.loader-brand').delay(350).fadeOut('slow');
    $('body').delay(350).css({ 'overflow': 'visible' });
});

function showDiv() {
    document.getElementById('section1').style.display = "block";
}

function hideDiv() {
    document.getElementById('section1').style.display = "none";
}

$(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        $('#header').addClass('affix');
    } else {
        $('#header').removeClass('affix');
    }
});

if ($('.cp-logos').length) {
    $('.cp-logos').owlCarousel({
        loop: true,
        margin: 25,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        smartSpeed: 1200,
        autoplay: 5000,
        //  navText: ['<img src="images/left-arrow.png"/>', '<img src="images/right-arrow.png"/>'],
        responsive: {
            0: {
                items: 2
            },
            480: {
                items: 2
            },
            768: {
                items: 4
            },
            800: {
                items: 4
            },
            960: {
                items: 5
            },
            1024: {
                items: 6
            }
        }
    });
}

if ($('.project').length) {
    $('.project').owlCarousel({
        loop: true,
        margin: 25,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        smartSpeed: 1200,
        autoplay: 5000,
        //  navText: ['<img src="images/left-arrow.png"/>', '<img src="images/right-arrow.png"/>'],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 2
            },
            800: {
                items: 2
            },
            960: {
                items: 4
            },
            1024: {
                items: 5
            }
        }
    });
}

