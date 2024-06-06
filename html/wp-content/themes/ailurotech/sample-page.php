<?php
/**
 * Template Name: Sample Page
 */

use Timber\Timber;

$context = Timber::context();

// Get the current post
$context['post'] = Timber::get_post();
$context['sample_text'] = get_field('sample_text');
$context['sample_title'] = get_field('title');

$contact_us_post = Timber::get_post(array(
  'name' => 'contact-us-section-title', 
  'post_type' => 'post',
));
$context['contact_section'] = $contact_us_post;
$context['contact_bg_video']  = get_field('bgvideo',$contact_us_post);
// Render the Twig template
Timber::render('partial/sample-page.twig', $context);