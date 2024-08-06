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

// Footer section
$icon_url = get_field("icon") ?: '';
$icon_target = get_field("icon_target") ?: '';

$first_row_title = get_field("first_row_title") ?: '';
$first_row_links = get_field("first_row_links") ?: '';

$second_row_title = get_field("second_row_title") ?: '';
$second_row_links = get_field("second_row_links") ?: '';

$third_row_title = get_field("third_row_title") ?: '';
$third_row_links = get_field("third_row_links") ?: '';

$title_of_column = get_field("title_of_column") ?: '';

$context['footer_logo'] = get_field("logo") ?: '';
$context['first_row_title'] = explode("!", $first_row_title);
$context['first_row_links'] = explode("!", $first_row_links);
$context['second_row_title'] = explode("!", $second_row_title);
$context['second_row_links'] = explode("!", $second_row_links);
$context['third_row_title'] = explode("!", $third_row_title);
$context['third_row_links'] = explode("!", $third_row_links);

$context['title_of_column'] = explode("!", $title_of_column);

$context['links_array'] = explode(" ", $icon_url);
$context['icon_target'] = explode(" ", $icon_target);

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
$context['carousel_detail_right_details']=explode("!", get_field('carousel_detail_right_details'));
$context['carousel_bottom_first_title']=explode("!", get_field('carousel_bottom_first_title'));
$context['carousel_bottom_second_title']=explode("!", get_field('carousel_bottom_second_title'));
$context['carousel_bottom_third_title']=explode("!", get_field('carousel_bottom_third_title'));
$context['carousel_bottom_first_detail']=explode("!", get_field('carousel_bottom_first_detail'));
$context['carousel_bottom_second_detail']=explode("!", get_field('carousel_bottom_second_detail'));
$context['carousel_bottom_third_detail']=explode("!", get_field('carousel_bottom_third_detail'));


// business section
$context['business_title'] = get_field('business_title');
$context['business_description'] = get_field('business_description');
$context['tab1_name'] = get_field('tab1_name');
$context['tab2_name'] = get_field('tab2_name');
$context['tab3_name'] = get_field('tab3_name');
$context['tab4_name'] = get_field('tab4_name');
$context['tab1_img'] = get_field('tab1_img');
$context['tab2_img'] = get_field('tab2_img');
$context['tab3_img'] = get_field('tab3_img');
$context['tab4_img'] = get_field('tab4_img');
$context['business_icons'] = explode("!", get_field('business_statistics_icon'));
$context['business_data'] = explode("!", get_field('business_statistics_data'));
$context['business_name'] = explode("!", get_field('business_statistics_name'));

$context['contact_section_bg'] = get_field('bgVideo') . '&amp;autoplay=1&amp;mute=1&amp;loop=1';
$context['button_text'] = get_field('buttonText') ?: '';
$context['button_href'] = get_field('buttonHref') ?: '';
$context['contact_content'] = get_field('content') ?: '';
$context['contact_title'] = get_field('title') ?: '';


// Feature section
$context['feature_icon'] = explode("!", get_field('feature_icon') ?: '');
$context['feature_title'] = get_field('feature_title') ?: '';
$context['feature_right_title'] = get_field('feature_right_title') ?: '';
$context['feature_left_title'] = explode("!", get_field('feature_left_title') ?: '');
$context['feature_left_details'] = explode("!", get_field('feature_left_details') ?: '');
$context['feature_right_details_title'] = explode("!", get_field('feature_right_details_title') ?: '');
$context['feature_right_details_number'] = explode("!", get_field('feature_right_details_number') ?: '');

// Welcome section
$context['welcome_section_bg'] = get_field('welcome_bgVideo') . '&amp;autoplay=1&amp;mute=1&amp;loop=1';
$context['welcome_button_text'] = get_field('welcome_buttonText') ?: '';
$context['welcome_button_href'] = get_field('welcome_buttonHref') ?: '';
$context['welcome_content'] = get_field('welcome_content') ?: '';
$context['welcome_title'] = get_field('welcome_title') ?: '';
$context['demo_text'] = get_field('welcome_linkText') ?: '';
$context['demo_href'] = get_field('welcome_linkHref') ?: '';

// Business section
$context['business_title'] = get_field('business_title') ?: '';
$context['business_description'] = get_field('business_description') ?: '';
$context['tab1_name'] = get_field('tab1_name') ?: '';
$context['tab2_name'] = get_field('tab2_name') ?: '';
$context['tab3_name'] = get_field('tab3_name') ?: '';
$context['tab4_name'] = get_field('tab4_name') ?: '';
$context['tab1_img'] = get_field('tab1_img') ?: '';
$context['tab2_img'] = get_field('tab2_img') ?: '';
$context['tab3_img'] = get_field('tab3_img') ?: '';
$context['tab4_img'] = get_field('tab4_img') ?: '';
$context['business_icons'] = explode("!", get_field('business_statistics_icon') ?: '');
$context['business_data'] = explode("!", get_field('business_statistics_data') ?: '');
$context['business_name'] = explode("!", get_field('business_statistics_name') ?: '');


// Subscription Plans
$plans = array();
for ($i = 1; $i <= 3; $i++) {
    $features = get_field('plan_' . $i . '_features');
    $features_array = $features ? explode("\n", trim($features)) : array();

    $plans[] = array(
        'title' => get_field('plan_' . $i . '_title') ?: '',
        'description' => get_field('plan_' . $i . '_description') ?: '',
        'monthly_price' => get_field('plan_' . $i . '_monthly_price') ?: 0,
        'yearly_price' => get_field('plan_' . $i . '_yearly_price') ?: 0,
        'features' => $features_array,
        'button_link' => get_field('plan_' . $i . '_button_link') ?: '#',
        'button_text' => get_field('plan_' . $i . '_button_text') ?: 'Sign Up',
    );
}
$context['plans'] = $plans;

// service section
$context['service_description'] = get_field('service_description');
$context['service_title'] = get_field('service_title');
$context['service_icons'] = explode("!", get_field('service_icon'));
$context['service_icon_names'] = explode("!", get_field('service_icon_name'));
$context['service_icon_descriptions'] = explode("!", get_field('service_icon_description'));

Timber::render('partial/index.twig', $context);
