(function ($) {





    $('.search-submit').on('click', function (event) {
        event.preventDefault();
        toggleState($('.search-field'), 'search-active')
    });

    $('.search-field').on('blur', function () {

        toggleState($('.search-field'), 'search-active');
    });

    function toggleState(element, classname) {
        if (!element.hasClass(classname)) {
            element.addClass(classname);
            element.focus();
        } else {
            element.removeClass(classname)
        }
    }

    // var bannerHeight = $('.site-header').height();

    $(window).scroll(function () {
        var yPosition = $(window).scrollTop();
        console.log(yPosition);
        if ($('body').hasClass('home')) {
            if (yPosition > 760) {
                $('.site-header').addClass('banner-stick');
            } else {
                $('.site-header').removeClass('banner-stick');
            }
        }
    })













})(jQuery);

// function newFunction(hidden) {
//     if (hidden = false) {
//         alert("not hidden");
//         // $('.search-field').css({ "display": "none" });
//     }
//     return hidden;
// }
