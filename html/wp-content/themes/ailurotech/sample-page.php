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

// Render the Twig template
Timber::render('partial/sample-page.twig', $context);