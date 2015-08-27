$.fn.cubeSlider = function () {
    'use strict';
    var scrolled = false;
    var counter = 0;
    var that = this;
    if ($('body').scrollTop() === 0) {
        $('body').css({
            overflow: 'hidden',
            height: '100vh'
        });
    }
    $(window).on('scroll', function () {
        if ($('body').scrollTop() === 0) {
            $('body').css({
                overflow: 'hidden',
                height: '100vh'
            });
        }
    });
    that.wrap('<div class="cubeSlider-wrapper"></div>');
    that.addClass('cubeSlider');
    that.find('> div:nth-child(1)').addClass('active');
    that.find('> div:nth-child(2)').addClass('after');
    that.find('> div:nth-child(4)').addClass('before');
    that.parent().append('<div class="control"> <a href="#" class="prev"><i class="fa fa-chevron-up"></i></a> <a href="#" class="next"><i class="fa fa-chevron-down"></i></a> </div>');
    that.find('> div > div > div').append('<div class="text-center"><a href="#scrollDown" class="cube-exit"><i class="fa fa-chevron-down"></i></a></div>');
    var caption = that.find('.cube-caption'),
        content = that.find('> div > div:first-child'),
        control = that.parent().find('.control');
    content.css({
        marginTop: ($(window).height() + $('#header').height() - content.height()) / 2
    });
    $(window).on('resize', function () {
        content.css({
            marginTop: ($(window).height() + $('#header').height() - content.height()) / 2
        });
    });
    control.find('.prev').after('<div class="captions"></div>');
    control.find('.captions').append(caption).css({
        position: 'relative',
        float: 'right',
        clear: 'right'
    });
    that.on('mousewheel', function (e) {
        if ($('body').scrollTop() === 0) {
            if (e.originalEvent.wheelDelta < 0) {
                $('.next').click();
            }
            if (e.originalEvent.wheelDelta > 0) {
                $('.prev').click();
            }
        }
    });
    that.swipe({
        swipeDown: function () {
            $('.prev').click();
        },
        swipeUp: function () {
            $('.next').click();
        }
    });
    content.css({
        transition: 'transform 1s, opacity 500ms 0s'
    });
    $('.cubeSlider-wrapper .next').on('click', function (e) {
        if (!scrolled) {
            counter += 1;
            content.css({
                transform: 'translateY(10vh)',
                opacity: 0
            });
            setTimeout(function () {
                content.css({
                    transform: 'translateY(0vh)',
                    opacity: 1
                });
            }, 1000);
            $(that).css({
                'transform': 'translateZ( -50vh) rotateX(' + counter * 90 + 'deg)'
            });

            e.preventDefault();
            scrolled = true;
            setTimeout(function () {
                scrolled = false;
            }, 2000);
        } else {
            return false;
        }
    });
    $('.cubeSlider-wrapper .prev').on('click', function (e) {
        if (!scrolled) {
            counter -= 1;
            content.css({
                transform: 'translateY(-10vh)'
            });
            setTimeout(function () {
                content.css({
                    transform: 'translateY(0vh)'
                });
            }, 1000);
            $(that).css({
                'transform': 'translateZ( -50vh) rotateX(' + counter * 90 + 'deg)'
            });

            e.preventDefault();
            scrolled = true;
            setTimeout(function () {
                scrolled = false;
            }, 2000);
        } else {
            return false;
        }
    });
};

$('#slideThis').cubeSlider();