<?php
/**
 * Register the Sample Page template.
 */
function ailurotech_add_page_template($templates) {
    $templates['sample-page.php'] = 'Sample Page';
    return $templates;
}
add_filter('theme_page_templates', 'ailurotech_add_page_template');

/**
 * Load the Sample Page template.
 */
function ailurotech_load_custom_template($template) {
    if (is_page_template('sample-page.php')) {
        $context = Timber::context();
        $post = Timber::get_post();

        if ($post) {
            $context['post'] = $post;
            // Fetch ACF fields and add them to the context
            $context['sample_text'] = get_field('sample_text', $post->ID);
        }

        // Debugging: Log context data
        error_log('Sample Page Template Loaded');
        error_log(print_r($context, true));

        Timber::render('sample-page.twig', $context);
        exit; // Prevent WordPress from loading the default template
    }
    return $template;
}
add_filter('template_include', 'ailurotech_load_custom_template');
