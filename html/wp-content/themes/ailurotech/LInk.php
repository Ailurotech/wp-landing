<?php
/**
 * Template Name: Link Page
 */

use Timber\Timber;

$context = Timber::context();

// Get the current post
$string = "about us!services!careers!partnership#fintech!software#Docs!Helpcenter";
$title="Company Products Support";
$firstExplode = explode('#', $string);
$link = array(); 
foreach ($firstExplode as $value) {
    $link[] = explode('!', $value); 
}
$titles = explode(' ', "Company Products Support");

$context['link'] = $link; 
$context['titles'] = $titles;

Timber::render('partial/link.twig', $context);





// Render the Twig template
Timber::render('partial/link.twig', $context);