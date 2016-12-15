/* globals $:false */
var width = $(window).width(),
    height = $(window).height(),
    $root = '/';
$(function() {
    var app = {
        init: function() {
            $(window).resize(function(event) {});
            $(document).ready(function($) {
                $body = $('body');
                //esc
                $(document).keyup(function(e) {
                    if (e.keyCode === 27) app.goIndex();
                });
                //left
                $(document).keyup(function(e) {
                    if (e.keyCode === 37 && $slider) app.goPrev($slider);
                });
                //right
                $(document).keyup(function(e) {
                    if (e.keyCode === 39 && $slider) app.goNext($slider);
                });
                $('#intro').click(function(event) {
                    $(this).fadeOut("300");
                });
                $(window).load(function() {
                    $(".loader").fadeOut("300", function() {
                        setTimeout(function() {
                            $('#intro').fadeOut("300");
                        }, 4000);
                    });
                    smoothScroll.init({
                        selector: '.section-link', // Selector for links (must be a class, ID, data attribute, or element tag)
                        selectorHeader: 'header', // Selector for fixed headers (must be a valid CSS selector) [optional]
                        speed: 1000, // Integer. How fast to complete the scroll in milliseconds
                        offset: 5,
                        easing: 'easeInOutCubic', // Easing pattern to use
                    });
                });
            });
        },
        sizeSet: function() {
            width = $(window).width();
            height = $(window).height();
            if (width <= 770 || Modernizr.touch) isMobile = true;
            if (isMobile) {
                if (width >= 770) {
                    //location.reload();
                }
            }
        },
        loadContent: function(url, target) {
            $.ajax({
                url: url,
                success: function(data) {
                    $(target).html(data);
                }
            });
        },
        deferImages: function() {
            var imgDefer = document.getElementsByTagName('img');
            for (var i = 0; i < imgDefer.length; i++) {
                if (imgDefer[i].getAttribute('data-src')) {
                    imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
                }
            }
        }
    };
    app.init();
});