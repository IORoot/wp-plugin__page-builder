<?php


add_action('page_builder_header_code', 'page_builder_header_code_callback');

function page_builder_header_code_callback()
{  
    $result = ''; 
    $header = get_field( "header" );

    if (empty($header)){ return; }

    foreach ($header as $head){
        $result .= $head['code'] . PHP_EOL;
    }

    echo $result;

}   