require('./bootstrap');
/*$("body").on('click', '[href*="#"]', function(e){
  var fixed_offset = 150;
  $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
  e.preventDefault();
});*/

var sections = $('.section')
    , nav = $('header')
    , nav_height = nav.outerHeight() + 40;

$(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();

    sections.each(function() {
        var top = $(this).offset().top - nav_height - 50,
            bottom = top + $(this).outerHeight() + 50;

        if (cur_pos >= top && cur_pos <= bottom) {
            nav.find('a').removeClass('active_nav-link');

            nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active_nav-link');
        }
    });
});

nav.find('a').on('click', function () {
    var $el = $(this)
        , id = $el.attr('href');

    $('html, body').animate({
        scrollTop: $(id).offset().top - nav_height
    }, 500);

    return false;
});



$(document).ready(function() {
    $('.menu-burger__header').click(function(){
        $('.menu-burger__header').toggleClass('open-menu');
        $('.header__nav').toggleClass('open-menu');
        $('body').toggleClass('fixed-page');
    });
});

$(document).ready(function() {
    $('.header-link').click(function(){
        $('.menu-burger__header').toggleClass('open-menu');
        $('.header__nav').toggleClass('open-menu');
        $('body').toggleClass('fixed-page');
    });
});
