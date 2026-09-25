<?php
/**
 * Stallion Software Hub Functions and Enqueues
 */

if (!function_exists('stallion_setup')) :
    function stallion_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

        // Register Primary Navigation Menu
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'stallion-software-hub'),
        ));
    }
endif;
add_action('after_setup_theme', 'stallion_setup');

/**
 * Enqueue scripts and styles
 */
function stallion_scripts() {
    // Google Fonts & Material Symbols
    wp_enqueue_style('stallion-fonts', 'https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('stallion-icons-material', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null);

    // Bootstrap 5.3.3 CSS & Bootstrap Icons
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3');

    // Custom CSS from HTML template
    if (file_exists(get_template_directory() . '/assets/src/index.css')) {
        wp_enqueue_style('stallion-index-css', get_template_directory_uri() . '/assets/src/index.css', array('bootstrap-css'), '1.0.0');
    }

    // Main Theme Stylesheet
    wp_enqueue_style('stallion-main-style', get_stylesheet_uri(), array(), '1.0.0');

    // Tailwind CSS Compiler (Browser Engine)
    wp_enqueue_script('tailwindcss-browser', 'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4', array(), '4.0.0', false);

    // Bootstrap 5.3.3 JS Bundle
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);

    // Page-specific JS controllers
    if (is_front_page()) {
        wp_enqueue_script('stallion-app-js', get_template_directory_uri() . '/assets/src/app.js', array('bootstrap-js'), '1.0.0', true);
    } else {
        wp_enqueue_script('stallion-product-js', get_template_directory_uri() . '/assets/src/product.js', array('bootstrap-js'), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'stallion_scripts');

// Enable module script attribute for app.js if needed
add_filter('script_loader_tag', function($tag, $handle, $src) {
    if ('stallion-app-js' === $handle) {
        return '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}, 10, 3);

// Disable wpautop on pages to keep custom HTML clean
add_filter('the_content', function($content) {
    if (is_page()) {
        remove_filter('the_content', 'wpautop');
    }
    return $content;
}, 0);