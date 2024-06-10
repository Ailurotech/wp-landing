<?php
/**
 * Template Name: Social Media Page
 */

use Timber\Timber;

$context = Timber::context();

// Get the current post
$context['post'] = Timber::get_post();
$icon_url=get_field("icon");

$context['links_array'] = explode(" ", $icon_url);






// Render the Twig template
Timber::render('partial/social_media.twig', $context);