$(document).ready(function() {
    
    // Enable Tooltips
    $('[rel="tooltip"]').tooltip();
    
    
    // Show/hide top button on page load
    checkTopButtonVisibility('#top-button', '#intro');
    
    // Show/hide top button on page scroll
    $(window).scroll(function() {
        checkTopButtonVisibility('#top-button', '#intro');
    });
    
});


/**
 * Determines wether or not the Top of Page button should be shown or not
 * based on how far down the page is scrolled.
 * 
 * @author Chris Kankiewicz (http://www.ChrisKankiewicz.com)
 */
function checkTopButtonVisibility(buttonEl, scrollEl) {
    
    if($(window).scrollTop() >= $(scrollEl).offset().top) {
        $(buttonEl).show();
    } else {
        $(buttonEl).hide();
    }
    
}