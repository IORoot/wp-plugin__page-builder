<?php

namespace andyp\pagebuilder\io;

use andyp\pagebuilder\acf\update_message_field;

class export
{

    public function __construct()
    {
        $this->register_admin_menu();
    }

    // make sure to run AFTER ACF is loaded.
    // also, get_submit_button is weird, so needs
    // to be run a little later too. acf/init is too
    // early.
    public function register_admin_menu()
    {
        add_action('admin_menu', [$this, 'admin_menu']);
    }

    
    public function admin_menu()
    {
        $this->create_interface();
        $this->get_acf_as_json();
        $this->update_export_textarea();
        $this->listen_for_export();
    }


    public function create_interface()
    {

        $output = '<a href="' . $_SERVER['REQUEST_URI'] . '&download_file=1" target="_blank">';
        $output .= 'Export to JSON File';
        $output .= '</a>';

        new update_message_field('field_602cdba7dd10f', $output);
    }




    public function get_acf_as_json()
    {
        // Get the 'builder_instance' field
        $this->acf_data = \get_field('field_5ffc43724a491', $_GET['post']);
    }


    public function update_export_textarea()
    {
        $acf_data = addslashes(json_encode($this->acf_data,JSON_PRETTY_PRINT));
        $result = \update_field('field_602e273c8cee6', print_r($acf_data, true), $_GET['post']);
    }


    public function listen_for_export()
    {
        if (empty($this->acf_data)){ return; }

        if( isset( $_GET["post"] ) && isset( $_GET['download_file'] ) ) {
            $this->download_json();
        }

    }

    public function download_json()
    {
        header('Content-disposition: attachment; filename=file.json');
        header('Content-Type: application/json');
        echo json_encode($this->acf_data,JSON_PRETTY_PRINT);
        die();
    }



}