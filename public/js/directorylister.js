$(document).ready(function() {
    
    // Enable Tooltips
    $('[rel="tooltip"]').tooltip();
    
    
    // Enable scrollspy on navigation
    $('#site-navigation').scrollspy();
    
    
    // // Get top of navigation
    // var originalTop = $('#site-navigation').offset().top;
//     
    // // Run nav position check on page load
    // checkNavPosition(originalTop);
//     
    // // Run nav position check on scoll 
    // $(window).scroll(function() {
        // checkNavPosition(originalTop);
    // })

    
    // Animate page scroll when returning to the top
    $('#page-top-link').click(function() {
       $('html, body').animate({ scrollTop: 0 }, 'fast');
       return false; 
    });
    
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
