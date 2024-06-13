<?php
/**
 * Template Name: Footer
 */

use Timber\Timber;

$context = Timber::context();

// Get the current post
$context['post'] = Timber::get_post();
$icon_url=get_field("icon");
var_dump("icon_url", $icon_url );
$context['links_array'] = explode(" ", $icon_url);


// Render the Twig template
Timber::render('partial/footer.twig', $context);