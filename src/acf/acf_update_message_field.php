<?php

namespace andyp\pagebuilder\acf;

/**
 * 1. MESSAGES:
 * 
 * Message fields do NOT have a acf name (weird). So, supply the key instead.
 * 
 * set_field('field_1234567890');
 * 
 * set_value(
 *      'message',
 *      'This is what I <b>WANT</b> to add into the message field.'
 * )
 * 
 * 
 * 
 * https://support.advancedcustomfields.com/forums/topic/updating-field-settings-in-php/
 */
class update_message_field
{

    private $field;

    private $field_key;

    private $message;

    /**
     * Only accepts the field_key
     */
    public function __construct($field_key, $message)
    {
        if (empty($field_key)){ return; }
        if (empty($message)){ return; }

        $this->field_key = $field_key;
        $this->message = $message;

        if (strpos($this->field_key, 'field_') !== 0){ return; }

        $this->get_acf_field_object();

        $this->change_field_param();
        
        $this->update_acf_field();

        return $this->result;
    }

    private function get_acf_field_object()
    {
        $this->field = \get_field_object($this->field_key);
    }

    private function change_field_param()
    {
        $this->field['message'] = $this->message;
    }

    private function update_acf_field()
    {
        $this->result = \acf_update_field($this->field);
    }

}