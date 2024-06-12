<?php

use Timber\Timber;
use Timber\Menu;
function get_socialmedia(){

    $context = Timber::context();

    $icon_url=get_field("icon");

    $context['links_array'] = explode(" ", $icon_url);
    
    print(1);


    Timber::render('partial/social_media.twig', $context);

}

add_action('wp_head', 'get_socialmedia');