<?php
/**
 * Template Name: WP_landing_page
 */

 use Timber\Timber;
 use Timber\Menu;
 

$context = Timber::context();


function setup_timber_menu() {
    global $context;
    $context['menu'] = new Menu('primary');
}

// Hook into an appropriate action to set up the menu
add_action('init', 'setup_timber_menu');

// Render the main template
Timber::render('index.twig', $context);
