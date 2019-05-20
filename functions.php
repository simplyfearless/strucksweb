<?php
/*
 * This is the child theme for Neve theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'neve_struckify_wp_enqueue_styles' );
function neve_struckify_wp_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/* */

function register_acf_block_types() {

    acf_register_block_type(array(
        'name'              => 'cta-block',
        'title'             => __('CTA Block'),
        'description'       => __('Footer CTA Block'),
        'render_template'   => 'blocks/cta-block.php',
        'category'          => 'formatting',
        'icon'              => 'dashicons-feedback',
        'keywords'          => array('cta-block'),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}