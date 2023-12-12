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
        if (scrollPosition > 100) {
            // Add the 'sticky' class to the navbar
            navbar.classList.add("sticky");
        } else {
            // Remove the 'sticky' class from the navbar
            navbar.classList.remove("sticky");
        }
    });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
