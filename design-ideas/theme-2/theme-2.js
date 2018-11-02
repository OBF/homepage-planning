/*$(function() {
    $('body').removeClass('fade-out'); 
}); */

$(document).ready(function() {
    $('body').fadeIn(500);
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {   
            $('.news-section').css({'opacity':'1'});
            $('.news-image').css({'transform':'translateX(100%)'});
        }
        
        if ($(this).scrollTop() > 850) {    
            $('.fellowships-section').css({'opacity':'1'}); 
            $('.fellowships-background-image').css({'transform':'translateX(-100%)'});
        }
    });
});