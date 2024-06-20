<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$context = Timber::context();

//footer section
$icon_url=get_field("icon");
$icon_target=get_field("icon_target");

$first_row_title=get_field("first_row_title");
$first_row_links=get_field("first_row_links");

$second_row_title=get_field("second_row_title");
$second_row_links=get_field("second_row_links");

$third_row_title=get_field("third_row_title");
$third_row_links=get_field("third_row_links");

$title_of_column=get_field("title_of_column");

$context['footer_logo']=get_field("logo");
$context['first_row_title']=explode("!", $first_row_title);
$context['first_row_links']=explode("!", $first_row_links);
$context['second_row_title']=explode("!", $second_row_title);
$context['second_row_links']=explode("!", $second_row_links);
$context['third_row_title']=explode("!", $third_row_title);
$context['third_row_links']=explode("!", $third_row_links);

$context['title_of_column']=explode("!", $title_of_column);

$context['links_array'] = explode(" ", $icon_url);
$context['icon_target'] = explode(" ", $icon_target);
/* Contact section */
$context['contact_section_bg'] = get_field('bgVideo').'&amp;autoplay=1&amp;mute=1&amp;loop=1';
$context['button_text'] = get_field('buttonText');
$context['button_href'] = get_field('buttonHref');
$context['contact_content'] = get_field('content');
$context['contact_title'] = get_field('title');

// Timber::render('partial/index.twig', $context);
Timber::render('partial/index.twig', $context);

