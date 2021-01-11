<?php

namespace andyp\pagebuilder\filters;

class disable_wysiwyg
{

    public function __construct()
    {
        add_action('init', [$this, 'init_remove_support'], 100);
        
    }

    public function init_remove_support()
    {
        remove_post_type_support( 'page', 'editor');
    }

}