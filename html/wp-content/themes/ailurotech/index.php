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
$context['footer_logo'] = get_field("logo");
$context['first_row_title'] = explode("!", get_field("first_row_title"));
$context['first_row_links'] = explode("!", get_field("first_row_links"));
$context['second_row_title'] = explode("!", get_field("second_row_title"));
$context['second_row_links'] = explode("!", get_field("second_row_links"));
$context['third_row_title'] = explode("!", get_field("third_row_title"));
$context['third_row_links'] = explode("!", get_field("third_row_links"));
$context['title_of_column'] = explode("!", get_field("title_of_column"));
$context['links_array'] = explode(" ", get_field("icon"));
$context['icon_target'] = explode(" ", get_field("icon_target"));
/* Contact section */
$context['contact_section_bg'] = get_field('bgVideo').'&amp;autoplay=1&amp;mute=1&amp;loop=1';
$context['button_text'] = get_field('buttonText');
$context['button_href'] = get_field('buttonHref');
$context['contact_content'] = get_field('content');
$context['contact_title'] = get_field('title');
//feature section
$context['feature_icon'] = explode("!", get_field('feature_icon'));
$context['feature_title'] = get_field('feature_title');
$context['feature_right_title'] = get_field('feature_right_title');
$context['feature_left_title'] = explode("!", get_field('feature_left_title'));
$context['feature_left_details'] = explode("!", get_field('feature_left_details'));
$context['feature_right_details_title'] = explode("!", get_field('feature_right_details_title'));
$context['feature_right_details_number'] = explode("!", get_field('feature_right_details_number'));
/* Welcome section */
$context['welcome_section_bg'] = get_field('welcome_bgVideo').'&amp;autoplay=1&amp;mute=1&amp;loop=1';
$context['welcome_button_text'] = get_field('welcome_buttonText');
$context['welcome_button_href'] = get_field('welcome_buttonHref');
$context['welcome_content'] = get_field('welcome_content');
$context['welcome_title'] = get_field('welcome_title');
$context['demo_text'] = get_field('welcome_linkText');
$context['demo_href'] = get_field('welcome_linkHref');
//carousel section
$context['carousel_title']=explode("!", get_field('carousel_title'));
$context['carousel_title_details']=explode("!", get_field('carousel_title_details'));
$context['carousel_left_img']=explode("!", get_field('carousel_left_img'));
$context['carousel_right_img']=explode("!", get_field('carousel_right_img'));
$context['carousel_detail_left_title']=explode("!", get_field('carousel_detail_left_title'));
$context['carousel_detail_left_details']=explode("!", get_field('carousel_detail_left_details'));
$context['carousel_detail_right_title']=explode("!", get_field('carousel_detail_right_title'));

Timber::render('partial/index.twig', $context);

