<?php
/**
 * Template Name: Default Page
 */

use Timber\Timber;

$context = Timber::context();

// Get the current post
$context['post'] = Timber::get_post();
$icon_url=get_field("icon");

$context['links_array'] = explode(" ", $icon_url);






// Render the Twig template
Timber::render('base.twig', $context);