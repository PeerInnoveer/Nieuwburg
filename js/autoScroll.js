$(document).ready(function(){
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);
        var page_url = window.location.href;
        var page_id = page_url.substring(page_url.lastIndexOf("#") + 1);

        // Scoll and don't show hash
        $('html, body').animate({
            'scrollTop': $target.offset().top - 163
        }, 1000, 'swing');
    });
});

// Scroll to top on click.

jQuery(document).ready(function() {
    var btn = $('#toTop');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 1390) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0},
        1300);
    });
});