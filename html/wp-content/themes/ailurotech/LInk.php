<?php
/**
 * Template Name: Link Page
 */

use Timber\Timber;

$context = Timber::context();

// Get the current post
$context['post']=Timber::context();

$string = get_field('links');
$title=get_field('title');
$firstExplode = explode('#', $string);
$link = array(); 
foreach ($firstExplode as $value) {
    $link[] = explode('!', $value); 
}
$titles = explode(' ', "Company Products Support");

$context['link'] = $link; 
$context['titles'] = $titles;

Timber::render('base.twig', $context);




