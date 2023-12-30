import domReady from '@roots/sage/client/dom-ready';
import 'bootstrap';
import * as popperjs from '@popperjs/core';
/**
 * Application entrypoint
 */
domReady(async () => {
    window.addEventListener("scroll", function () {
        // Get the current scroll position
        var scrollPosition = window.scrollY;

        // Get the navbar element
        var navbar = document.querySelector(".navbar");

        // Check if the scroll position is greater than a certain value (adjust as needed)
        if (scrollPosition > 50) {
            // Add the 'sticky' class to the navbar
            navbar.classList.add("sticky");
        } else {
            // Remove the 'sticky' class from the navbar
            navbar.classList.remove("sticky");
        }
    })

});
jQuery(document).ready(function($) {
    $('.accordion .tab:first-child').addClass('show');

    // Hover event for accordion tabs
    $('.accordion .tab').hover(
        function() {
            // Remove "show" class from all tabs
            $('.accordion .tab').removeClass('show');
            // Add "show" class to the hovered tab
            $(this).addClass('show');
        },
        function() {
            // Mouse leave event
            // Optionally, you can add behavior when the mouse leaves
            // For example, add "show" class back to the first tab
            $(this).removeClass('show');
            $('.accordion .tab:first-child').addClass('show');
        }
    );
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
