$(document).ready(function() {
    
    $('#site-navigation').scrollspy();

    var originalTop = $('#site-navigation').offset().top;
    
    console.log(originalTop);
    
    checkNavPosition(originalTop);
    
    $(window).scroll(function() {
        checkNavPosition(originalTop);
    })
    
    $('#page-top-link').click(function() {
       $('html, body').animate({ scrollTop: 0 }, 'fast');
       
       return false; 
    });
    
    function checkNavPosition(elTop) {
        if ($(window).scrollTop() >= elTop) {
            $('body').addClass('scrolled');
            $('#page-top-link').show();
        } else {
            $('body').removeClass('scrolled');
            $('#page-top-link').hide();
        }
    }
    
});
