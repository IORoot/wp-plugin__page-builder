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
        $this->decode_and_check_valid_json();
        $this->load_data();
        $this->clear_import_textarea();
    }


    public function look_for_json()
    {
        if (!isset($_GET['post'])){ return; }
        if (!get_field('json_import_data')) { return; }

        // Get the 'json_import_data' field
        $this->acf_data = \get_field('field_602e58a3bbfcd', $_GET['post']);
    }


    public function decode_and_check_valid_json()
    {
        $this->data = json_decode($this->acf_data, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->error = json_last_error();
        }
    }



    public function load_data()
    {
        if (!empty($this->error)){ return; }
        if (empty($this->data)){ return; }
        if (!is_array($this->data)){ return; }
        if (!isset($_GET['post'])){ return; }

        // update 'builder_instance'
        $result = \update_field('field_5ffc43724a491', $this->data, $_GET['post']);
    }




    public function clear_import_textarea()
    {
        if (!isset($_GET['post'])){ return; }
        \update_field('field_602e58a3bbfcd', ' ', $_GET['post']);
    }



}