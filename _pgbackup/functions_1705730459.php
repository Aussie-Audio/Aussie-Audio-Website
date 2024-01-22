<?php
if ( ! function_exists( 'aussie_audio_theme_setup' ) ) :

function aussie_audio_theme_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'aussie_audio_theme', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'aussie_audio_theme' ),
        'social'  => __( 'Social Links Menu', 'aussie_audio_theme' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // aussie_audio_theme_setup

add_action( 'after_setup_theme', 'aussie_audio_theme_setup' );


if ( ! function_exists( 'aussie_audio_theme_init' ) ) :

function aussie_audio_theme_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // aussie_audio_theme_setup

add_action( 'init', 'aussie_audio_theme_init' );


if ( ! function_exists( 'aussie_audio_theme_custom_image_sizes_names' ) ) :

function aussie_audio_theme_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'aussie_audio_theme_custom_image_sizes_names' );
endif;// aussie_audio_theme_custom_image_sizes_names



if ( ! function_exists( 'aussie_audio_theme_widgets_init' ) ) :

function aussie_audio_theme_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'aussie_audio_theme_widgets_init' );
endif;// aussie_audio_theme_widgets_init



if ( ! function_exists( 'aussie_audio_theme_customize_register' ) ) :

function aussie_audio_theme_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'aussie_audio_theme_customize_register' );
endif;// aussie_audio_theme_customize_register


if ( ! function_exists( 'aussie_audio_theme_enqueue_scripts' ) ) :
    function aussie_audio_theme_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'aussie_audio_theme-popper' );
    wp_enqueue_script( 'aussie_audio_theme-popper', get_template_directory_uri() . '/assets/js/popper.min.js', [], '1.0.9', true);

    wp_deregister_script( 'aussie_audio_theme-bootstrap' );
    wp_enqueue_script( 'aussie_audio_theme-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', [], '1.0.9', true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'aussie_audio_theme-blocks' );
    wp_enqueue_style( 'aussie_audio_theme-blocks', get_template_directory_uri() . '/blocks.css', [], '1.0.9', 'all');

    wp_deregister_style( 'aussie_audio_theme-bootstrap' );
    wp_enqueue_style( 'aussie_audio_theme-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', [], '1.0.9', 'all');

    wp_deregister_style( 'aussie_audio_theme-bootstrap-1' );
    wp_enqueue_style( 'aussie_audio_theme-bootstrap-1', get_template_directory_uri() . '/bootstrap_theme/bootstrap.css', [], '1.0.9', 'all');

    wp_deregister_style( 'aussie_audio_theme-style' );
    wp_enqueue_style( 'aussie_audio_theme-style', get_bloginfo('stylesheet_url'), [], '1.0.9', 'all');

    wp_deregister_style( 'aussie_audio_theme-style-1' );
    wp_enqueue_style( 'aussie_audio_theme-style-1', get_template_directory_uri() . '/css/style.css', [], '1.0.9', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'aussie_audio_theme_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }
if( !class_exists( 'PG_Smart_Walker_Nav_Menu' ) ) { require_once "inc/wp_smart_navwalker.php"; }

    /* Pinegrow generated Include Resources End */

/* Setting up theme supports options */

function aussie_audio_theme_setup_theme_supports() {
    // Don't edit anything between the following comments.
    /* Pinegrow generated Theme Supports Begin */
    
//Tell WP to scope loaded editor styles to the block editor                    
add_theme_support( 'editor-styles' );
    /* Pinegrow generated Theme Supports End */
}
add_action('after_setup_theme', 'aussie_audio_theme_setup_theme_supports');

/* End of setting up theme supports options */


/* Loading editor styles for blocks */

function aussie_audio_theme_add_blocks_editor_styles() {
// Add blocks editor styles. Don't edit anything between the following comments.
/* Pinegrow generated Load Blocks Editor Styles Begin */
    add_editor_style( 'style.css' );

    /* Pinegrow generated Load Blocks Editor Styles End */
}
add_action('admin_init', 'aussie_audio_theme_add_blocks_editor_styles');

/* End of loading editor styles for blocks */

?>