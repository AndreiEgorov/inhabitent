(function ($) {


    //all of your js goes here in this single funciton

    // $('body').append('Hello i am from inhabitent script');

    // $('.search-field').hide();


    // $('.search-submit').on('click', function (event) {
    //     event.preventDefault();
    //     $('.search-form').toggleClass('open')

    //     // $('.search-field').show('slow');

    //     $(document).on('keypress', function (e) {
    //         if (e.which === 13) {
    //             console.log('test');
    //             // submit webform
    //             $('.search-form').submit();
    //         }
    //     })


    // });

    $('.search-field').hide('fast');

    $('.search-submit').on('click', function (event) {
        event.preventDefault();

        $('.search-field').show('fast');
        $('.search-field').focus();

        $('.search-field').on('blur', function () {
            $('.search-field').hide('fast');

        }
        )

    });

    $('.search-field').on('keypress', function (enter) {
        if (enter.which === 13) {
            $('.search-field').submit();

        }



    })


    var bannerHeight = $('.site-header').height();
    console.log(bannerHeight);
    $(window).scroll(function () {
        var yPosition = $(window).scrollTop();
        console.log(yPosition);
        if ($('body').hasClass('home')) {
            if (yPosition > 940) {
                $('.site-header').addClass('banner-stick');
            } else {
                $('.site-header').removeClass('banner-stick');
            }
        }
    })













})(jQuery);