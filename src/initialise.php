<?php

namespace andyp\pagebuilder;

class initialise {


    public function __construct()
    {
        new filters\disable_wysiwyg;
        new filters\the_content;
    }




}