<?php
/*
* Plugin Name: SVG Playground
* Description: Include a few SVG-related demos with shortcode [logo_spinner_1]
* Version: 1.0
* Author: Yi Yang
* Author URI: https://blog.ahyangyi.org
*/

function add_logo_spinner_1() {
    $dir = plugin_dir_url( __FILE__ );

    return "<logo-spinner-1></logo-spinner-1>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/runtime.4ccf67c919f9077afc3e.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/polyfills.c6871e56cb80756a5498.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/main.6f7a2507a851aa64b647.js\"></script>";
}

add_shortcode('logo_spinner_1', 'add_logo_spinner_1');
?>
