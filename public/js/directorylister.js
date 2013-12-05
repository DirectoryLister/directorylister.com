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
        $('html, body').animate({ scrollTop: 0 }, 'fast');
        event.preventDefault();
    });

    // Highlight bitcoin address on click
    $('#bitcoin-address').on('mouseup', function(event) {
        $(this).select();
        event.preventDefault();
    });

    // Initialize ZeroClipboard
    var clip = new ZeroClipboard($('#bitcoin-button'));

    // ZeroClipboard on mouseover event
    clip.on('mouseover', function() {
        $(this).tooltip('destroy');
        $(this).tooltip({
            title: 'Copy address to clipboard',
            trigger: 'manual',
            placement: 'top',
            container: 'body'
        }).tooltip('show');
    });

    // ZeroClipboard on mouseout event
    clip.on('mouseout', function() {
        $(this).tooltip('destroy');
    });

    // ZeroClipboard on complete event
    clip.on('complete', function() {
        $(this).tooltip('destroy');
        $(this).tooltip({
            title: 'Copied!',
            trigger: 'manual',
            placement: 'top',
            container: 'body'
        }).tooltip('show');
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