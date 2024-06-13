<?php
/**
 * Template Name: Contact Section
 */

use Timber\Timber;

$context = Timber::context();

// Get the current post
$context['post'] = Timber::get_post();
$context['contact_section_bg'] = get_field('bgVideo').'&amp;autoplay=1&amp;mute=1&amp;loop=1';
$context['button_text'] = get_field('buttonText');
$context['button_href'] = get_field('buttonHref');
// Render the Twig template
Timber::render('partial/contact-section.twig', $context);