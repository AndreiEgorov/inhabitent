(function ($) {







    $('.search-field').hide('fast');

    $('.search-submit').on('click', function (event) {
        event.preventDefault();

        $('.search-field').show('fast');
        $('.search-field').focus();

        $('.search-field').on('blur', function () {
            $('.search-field').hide('slow');
        })
    });

    $(document).on('keypress', function (enter) {
        if (enter.which === 13) {
            $('.search-form').submit();

        }



    })


    var bannerHeight = $('.site-header').height();

    $(window).scroll(function () {
        var yPosition = $(window).scrollTop();

        if ($('body').hasClass('home')) {
            if (yPosition > 940) {
                $('.site-header').addClass('banner-stick');
            } else {
                $('.site-header').removeClass('banner-stick');
            }
        }
    })













})(jQuery);