<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Page Builder',
        'icon'      => 'account-hard-hat',
        'color'     => '#70579F',
        'path'      => __FILE__,
    ]);
} );