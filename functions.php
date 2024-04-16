<?php 

/**
 * Enqueue styles
 */

 if (!function_exists('jrk_styles')):
    function jrk_styles() {
        wp_enqueue_style('jrk-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    }
endif;

add_action('wp_enqueue_scripts', 'jrk_styles');

/**
 * Allow shortcodes in widgets
 */
 add_filter ('widget_text', 'do_shortcode');

 function year_shortcode () {
    $year = date_i18n ('Y');
    return $year;
    }
add_shortcode ('year', 'year_shortcode');


	
add_theme_support( 'post-thumbnails' );
add_image_size('extra-large, 1500, 1500, true');