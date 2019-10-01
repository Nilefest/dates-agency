$(window).scroll(function () {
    var height = $(window).scrollTop();
    /*Если сделали скролл на 110px задаём новый класс для mobile-sticky-wrap*/
    if (height > 110) {
        $('.mobile-sticky-wrap').addClass('mobile-sticky-wrap-fixed');
    } else {
        /*Если меньше 110px удаляем класс для mobile-sticky-wrap*/
        $('.mobile-sticky-wrap').removeClass('mobile-sticky-wrap-fixed');
    }
});


$(window).scroll(function () {
    var height = $(window).scrollTop();
    /*Если сделали скролл на 120px задаём новый класс для laptop-sticky-wrap*/
    if (height > 120) {
        $('.laptop-sticky-wrap').addClass('laptop-sticky-wrap-fixed');
    } else {
        /*Если меньше 120px удаляем класс для laptop-sticky-wrap*/
        $('.laptop-sticky-wrap').removeClass('laptop-sticky-wrap-fixed');
    }
});

$("#modal-stg__link-plus-photo").click(function () {
    $('#modal-stg__wrap-link-plus-photo, #modal-stg__block-with-photo').toggleClass('d-none d-block');
});

$("#modal-gfg__link-plus-photo").click(function () {
    $('#modal-gfg__wrap-link-plus-photo, #modal-gfg__block-with-photo').toggleClass('d-none d-block');
});

$(document).ready(function(){
 
    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
         
});
