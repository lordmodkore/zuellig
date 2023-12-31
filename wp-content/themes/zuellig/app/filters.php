<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});
add_filter('use_block_editor_for_post', '__return_false');
add_filter('show_admin_bar', '__return_false');


function insert_and_wrap_content_middle_of_post($content) {

    $postId = get_queried_object_id();

    $blockquote_text = get_field('blockqoute_text', $postId);

    // Check if we are on a single post
    if ($blockquote_text) {



        // Split the content into an array of paragraphs
        $paragraphs = explode('</p>', $content);

        // Calculate the middle index
        $middle_index = floor(count($paragraphs) / 2);

        // Initialize $custom_html
        $custom_html = '';

        // Insert the custom HTML in the middle of the paragraphs
        if ($blockquote_text) {
            $custom_html = '
                <div class="row border_inner-color border-top border-bottom">
                    <div class="col text-center py-3">
                        <p class="mb-0 fw-bold who_paragraph-size fst-italic">' . $blockquote_text . '</p>
                    </div>
                </div>';
            array_splice($paragraphs, $middle_index, 0, $custom_html);
        }

        // Loop through each paragraph and wrap it with divs
        foreach ($paragraphs as &$paragraph) {
            if (!empty($paragraph) && strpos($paragraph, $custom_html) === false) {
                // Wrap each paragraph with divs except the custom HTML
                $paragraph = '<div class="col-4"></div><div class="col-lg-8 col-md-8 col-sm-12 mb-3">' . $paragraph . '</div>';
            }
        }

        // Convert the array back to a string
        $content = implode('</p>', $paragraphs);
    } else {
        // Split the content into an array of paragraphs
        $paragraphs = explode('</p>', $content);
        // Loop through each paragraph and wrap it with divs
        foreach ($paragraphs as &$paragraph) {
            if ( ! empty( $paragraph ) ) {
                // Wrap each paragraph with divs except the custom HTML
                $paragraph = '<div class="col-4"></div><div class="col-lg-8 col-md-8 col-sm-12 mb-3">' . $paragraph . '</div>';
            }
        }
        // Convert the array back to a string
        $content = implode('</p>', $paragraphs);
    }

    return $content;
}









add_filter('the_content', __NAMESPACE__.'\\insert_and_wrap_content_middle_of_post');



