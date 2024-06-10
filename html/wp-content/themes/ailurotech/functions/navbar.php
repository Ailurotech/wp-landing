<?php

use Timber\Timber;
use Timber\Menu;

function register_menus()
{
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'ailurotech'),
        )
    );
}
add_action('init', 'register_menus');

function get_timber_menu()
{
    $context = Timber::context();
    $context['menu'] = new Menu('primary');
    $context['site'] = new TimberSite();
    Timber::render('navbar.twig', $context);
}
add_action('wp_head', 'get_timber_menu');

