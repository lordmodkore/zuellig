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
    // $('.accordion .tab').hover(
    //     function() {
    //         // Remove "show" class from all tabs
    //         $('.accordion .tab').removeClass('show');
    //         // Add "show" class to the hovered tab
    //         $(this).addClass('show');
    //     },
    //     function() {
    //         // Mouse leave event
    //         // Optionally, you can add behavior when the mouse leaves
    //         // For example, add "show" class back to the first tab
    //         $(this).removeClass('show');
    //         $('.accordion .tab:first-child').addClass('show');
    //     }
    // );
    $('.accordion-control .expand').on('click', function(e) {
        e.preventDefault();

        // Get the target tab number from the data attribute
        var targetTabNumber = $(this).data('target-tab');

        // Toggle the "show" class for the clicked tab
        $('.accordion .tab').removeClass('show');
        $('.accordion .tab[data-tab-number="' + targetTabNumber + '"]').addClass('show');

        // Update icons for all tabs
        updateIcons();
    });

// Optionally, handle mouse leave event
    $('.accordion').on('mouseleave', function() {
        // Mouse leave event
        // Optionally, you can add behavior when the mouse leaves
        // For example, add "show" class back to the first tab
        $('.accordion .tab').removeClass('show');
        $('.accordion .tab:first-child').addClass('show');

        // Update icons for all tabs
        updateIcons();
    });

    function updateIcons() {
        // Update icons based on the visibility of each tab
        $('.accordion .tab').each(function() {
            var iconClass = $(this).hasClass('show') ? 'fa-times' : 'fa-plus';
            $(this).find('.expand i').removeClass().addClass('fa ' + iconClass);
        });
    }
    function showPopup() {
        $('#overlay').show();
        $('#popup-container').show();
    }

    // Function to hide the overlay and pop-up
    function hidePopup() {
        $('#overlay').hide();
        $('#popup-container').hide();
    }

    // Button click to show pop-up
    $('.openFormButton').click(function() {
        showPopup();
    });

    // Button click to hide pop-up
    $('#closeFormButton').click(function() {
        hidePopup();
    });

    // Optionally, you can close the pop-up when clicking outside the content or on the overlay
    $('#overlay').click(function(event) {
        if (event.target === this) {
            hidePopup();
        }
    });

    $('#menu-primary-navigation .menu-item-has-children').hover(
        function() {
            // Hover-in: Show submenu
            $(this).children('.sub-menu').stop(true, true).slideDown(200);
        },
        function() {
            // Hover-out: Hide submenu
            $(this).children('.sub-menu').stop(true, true).slideUp(200);
        }
    );

    var maxHeight = 0;
    $('.career-item .block_leaders').each(function () {
        var height = $(this).height();
        if (height > maxHeight) {
            maxHeight = height;
        }
    });

    // Set the same height for all career items
    $('.career-item .block_leaders').height(maxHeight);
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
