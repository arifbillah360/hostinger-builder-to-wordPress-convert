<?php
/**
 * TWK Rheinland Theme Functions
 *
 * @package TWK_Rheinland
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function twk_rheinland_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'twk-rheinland' ),
        'footer'  => esc_html__( 'Footer Menu', 'twk-rheinland' ),
    ) );

    // Switch default core markup to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add theme support for custom logo.
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add theme support for custom background.
    add_theme_support( 'custom-background', apply_filters( 'twk_rheinland_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'twk_rheinland_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function twk_rheinland_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'twk_rheinland_content_width', 1280 );
}
add_action( 'after_setup_theme', 'twk_rheinland_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twk_rheinland_enqueue_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    // Enqueue main stylesheet
    wp_enqueue_style( 'twk-rheinland-style', get_stylesheet_uri(), array(), $theme_version );

    // Enqueue page-specific stylesheets
    $page_slug = get_post_field( 'post_name', get_post() );

    if ( is_front_page() || is_home() ) {
        wp_enqueue_style( 'twk-rheinland-home', get_template_directory_uri() . '/assets/css/home-style.css', array(), $theme_version );
    } elseif ( $page_slug === 'uber-uns' || $page_slug === 'partner-klimatechnik' ) {
        wp_enqueue_style( 'twk-rheinland-partner', get_template_directory_uri() . '/assets/css/partner-style.css', array(), $theme_version );
    } elseif ( $page_slug === 'leistungen' || $page_slug === 'kaelte-klimaloesungen-profi' ) {
        wp_enqueue_style( 'twk-rheinland-services', get_template_directory_uri() . '/assets/css/services-style.css', array(), $theme_version );
    } elseif ( $page_slug === 'kontakt' || $page_slug === 'kontakt-klimaservice' ) {
        wp_enqueue_style( 'twk-rheinland-contact', get_template_directory_uri() . '/assets/css/contact-style.css', array(), $theme_version );
    }

    // Enqueue JavaScript files
    wp_enqueue_script( 'twk-rheinland-util', get_template_directory_uri() . '/assets/js/util.js', array(), $theme_version, true );
    wp_enqueue_script( 'twk-rheinland-common', get_template_directory_uri() . '/assets/js/common.js', array( 'jquery' ), $theme_version, true );
    wp_enqueue_script( 'twk-rheinland-controls', get_template_directory_uri() . '/assets/js/controls.js', array( 'jquery' ), $theme_version, true );
    wp_enqueue_script( 'twk-rheinland-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), $theme_version, true );

    // Enqueue Google Maps scripts if on contact page
    if ( $page_slug === 'kontakt' || $page_slug === 'kontakt-klimaservice' || is_page_template( 'page-contact.php' ) ) {
        wp_enqueue_script( 'twk-rheinland-maps', get_template_directory_uri() . '/assets/js/map.js', array(), $theme_version, true );
        wp_enqueue_script( 'twk-rheinland-init-embed', get_template_directory_uri() . '/assets/js/init_embed.js', array(), $theme_version, true );
    }

    // Enqueue comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'twk_rheinland_enqueue_scripts' );

/**
 * Register widget areas.
 */
function twk_rheinland_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'twk-rheinland' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'twk-rheinland' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'twk-rheinland' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'twk-rheinland' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'twk-rheinland' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'twk-rheinland' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'twk-rheinland' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'twk-rheinland' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'twk_rheinland_widgets_init' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
