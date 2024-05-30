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
add_action('after_setup_theme', function() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ailurotech'),
    ));
});

function ailurotech_enqueue_assets() {
    wp_enqueue_style('ailurotech-main-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('ailurotech-main-script', get_template_directory_uri() . '/dist/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'ailurotech_enqueue_assets');


foreach (glob(__DIR__ . '/functions/*.php') as $file) {
    require_once $file;
}