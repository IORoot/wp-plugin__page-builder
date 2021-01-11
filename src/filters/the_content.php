<?php

namespace andyp\pagebuilder\filters;

class the_content
{

    public $instance;
    public $organism;

    public $output;
    

    public function __construct()
    {
        add_filter( 'the_content', [$this, 'filter_the_content_in_the_main_loop'], 1 );
    }

    
    public function filter_the_content_in_the_main_loop( $content ) {
    

        // Get from ACF
        $builder_instance = get_field('builder_instance');


        // Check if we're inside the main loop in a single Post.
        if ( !is_singular() ) { return $content; }
        if ( !in_the_loop() ) { return $content; }
        if ( !is_main_query() ) { return $content; }
        if( empty($builder_instance) ) { return $content; }

        foreach ($builder_instance as $this->instance)
        {
            $this->get_organism();
        }

        return $this->output;
        
    }



    public function get_organism()
    {
        foreach($this->instance['organism'] as $this->organism)
        {
            $this->instantiate_organism();
        }
    }


    public function instantiate_organism()
    {
        $namespace = '\\andyp\\pagebuilder\\' . $this->organism['acf_fc_layout'] . '\\initialise';

        $organism = new $namespace;

        $organism->set($this->organism);

        $this->output .= $organism->get();
    }


}