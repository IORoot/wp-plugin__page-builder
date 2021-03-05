<?php

add_filter('acf/fields/flexible_content/layout_title/name=organism', 'andyp_organism_flexible_content_layout_title', 10, 4);


function andyp_organism_flexible_content_layout_title( $title, $field, $layout, $i ) {
    $text = '';

    if( $text = get_sub_field('label') ) {
        $title .= ': <b>' . esc_html($text) . '</b>';
    }
    
    return $title;
}