$(document).ready(function() {

    // Enable Tooltips
    $('[rel="tooltip"]').tooltip();

    // Show/hide top button on page load
    checkTopButtonVisibility('.top-button', '#download-btn');

    // Show/hide top button on scroll
    $(window).scroll(function() {
        checkTopButtonVisibility('.top-button', '#download-btn');
    });

    // Scroll page on click action
    $('.top-button').click(function(event) {

        // Prevent default action
        event.preventDefault();

        // Animate scroll to top of page
        $('html, body').animate({ scrollTop: 0 }, 'fast', function() {

            // Clear URL hash
            location.hash = null;

        });

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
        $(buttonEl).fadeIn(250);
    } else {
        $(buttonEl).fadeOut(250);
    }

}