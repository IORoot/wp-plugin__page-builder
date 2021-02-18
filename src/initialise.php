<?php

namespace andyp\pagebuilder;

class initialise {


    public function __construct()
    {

        // ┌─────────────────────────────────────────────────────────────────────────┐
        // │                            Include Field Groups    	        	     │
        // └─────────────────────────────────────────────────────────────────────────┘
        require __DIR__.'/acf/acf_field_groups.php';
        require __DIR__.'/acf/acf_update_message_field.php';

        
        new filters\disable_wysiwyg;
        new filters\the_content;
        new io\import;
        new io\export;
    }

}