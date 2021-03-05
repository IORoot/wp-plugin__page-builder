<?php


add_action('page_builder_footer_code', 'page_builder_footer_code_callback');

function page_builder_footer_code_callback()
{  
    $result = ''; 
    $footer = get_field( "footer" );

    foreach ($footer as $foot){
        $result .= $foot['code'] . PHP_EOL;
    }

    echo $result;

}   