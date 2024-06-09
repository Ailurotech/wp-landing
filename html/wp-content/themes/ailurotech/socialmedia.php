<?php
/**
 * Template Name: socialmedia Page
 */

use Timber\Timber;

$context = Timber::context();

// Get the current post
$context['post'] = Timber::get_post();
$ins=get_field("social_media");
$linkedin=get_field("linkedin");
$twitter=get_field("twitter");
$facebook=get_field("facebook");


$context['ins']=$ins['sizes']['thumbnail'];
$context['linkedin']=$linkedin['sizes']['thumbnail'];
$context['twitter']=$twitter['sizes']['thumbnail'];
$context['facebook']=$facebook['sizes']['thumbnail'];


// Render the Twig template
Timber::render('partial/socialmedia.twig', $context);