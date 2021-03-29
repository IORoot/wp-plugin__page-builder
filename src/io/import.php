<?php

namespace andyp\pagebuilder\io;

use andyp\pagebuilder\acf\update_message_field;

class import
{

    public $data;
    public $error;

    public function __construct()
    {
        add_action('admin_menu', [$this, 'import']);
    }

    public function import()
    {
        $this->look_for_json();
        $this->decode_and_check_valid_json_data();
        $this->decode_and_check_valid_json_svg();
        $this->load_data();
        $this->load_svg();
        $this->clear_import_textarea();
    }


    public function look_for_json()
    {
        if (!isset($_GET['post'])){ return; }
        // Get the 'json_import_data' field
        $this->acf_data = \get_field('json_import_data', $_GET['post']);
        $this->svg_data = \get_field('json_import_svg', $_GET['post']);
    }


    public function decode_and_check_valid_json_data()
    {
        if (!isset($this->acf_data)){ return; }
        $this->data = json_decode($this->acf_data, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->data_error = json_last_error();
        }
    }

    public function decode_and_check_valid_json_svg()
    {
        if (!isset($this->svg_data)){ return; }
        $this->data_SVG = json_decode($this->svg_data, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->svg_error = json_last_error();
        }
    }



    public function load_data()
    {
        if (!empty($this->data_error)){ return; }
        if (empty($this->data)){ return; }
        if (!is_array($this->data)){ return; }
        if (!isset($_GET['post'])){ return; }

        // update 'builder_instance'
        $result = \update_field('builder_instance', $this->data, $_GET['post']);
    }


    public function load_svg()
    {
        if (!empty($this->svg_error)){ return; }
        if (empty($this->data_SVG)){ return; }
        if (!is_array($this->data_SVG)){ return; }
        if (!isset($_GET['post'])){ return; }

        // update 'svg_instances'
        $result = \update_field('svg_instances', $this->data_SVG, $_GET['post']);
    }




    public function clear_import_textarea()
    {
        if (!isset($_GET['post'])){ return; }
        \update_field('json_import_data', ' ', $_GET['post']);
        \update_field('json_import_svg', ' ', $_GET['post']);
    }



}