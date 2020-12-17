





 $("#hamburger").on('click', function() {
    $(this).toggleClass('active');
    $(".top-menu").slideToggle();
    // $(".nav__right").toggleClass('open');
})

 $("#user").on('click', function() {
    $(this).toggleClass('active');
    $(".login__menu").slideToggle();
    // $(".nav__right").toggleClass('open');
})

$(document).ready(function()
{

    // var bdh = $('header').outerHeight();
    // $('body').css('padding-top', bdh + 'px'); 

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 100) {
            $("header").addClass("fixed-header");
        } else {
            $("header").removeClass("fixed-header");
        }
        
        
    });
        AOS.init();

});





