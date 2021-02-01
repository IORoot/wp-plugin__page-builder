<?php

namespace andyp\pagebuilder;

class initialise {


    public function __construct()
    {

        // ┌─────────────────────────────────────────────────────────────────────────┐
        // │                            Include Field Groups    	        	     │
        // └─────────────────────────────────────────────────────────────────────────┘
        // require __DIR__.'/acf/acf_field_groups.php';

        
        new filters\disable_wysiwyg;
        new filters\the_content;
    }

}