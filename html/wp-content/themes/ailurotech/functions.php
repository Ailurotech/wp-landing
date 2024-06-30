<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/StarterSite.php';

Timber\Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = ['templates', 'views'];

new StarterSite();

// Register navigation menus
add_action('after_setup_theme', function () {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'ailurotech'),
        )
    );
});

// Enqueue styles and scripts
function ailurotech_enqueue_assets()
{
    wp_enqueue_style('ailurotech-main-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('ailurotech-main-script', get_template_directory_uri() . '/dist/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ailurotech_enqueue_assets');

//add the fonts style
function mytheme_enqueue_styles()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Blinker:wght@100;200;300;400;600;700;800;900&display=swap', false);
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');


foreach (glob(__DIR__ . '/functions/*.php') as $file) {
    require_once $file;
}

// subscription
function add_subscription_menu_item($items, $args)
{
    $query = new WP_Query(
        array(
            'post_type' => 'page',
            'title' => 'Subscription',
            'posts_per_page' => 1
        )
    );
    if ($query->have_posts()) {
        $query->the_post();
        $subscription_page_url = get_permalink();
        $items .= '<li><a href="' . $subscription_page_url . '">Subscription</a></li>';
        wp_reset_postdata();
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'add_subscription_menu_item', 10, 2);