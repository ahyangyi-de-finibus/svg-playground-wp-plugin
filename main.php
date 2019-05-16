<?php
/*
* Plugin Name: SVG Playground
* Description: Include a few SVG-related demos with shortcode [logo_spinner_1]
* Version: 1.0.1
* Author: Yi Yang
* Author URI: https://blog.ahyangyi.org
*/

function add_logo_spinner_1() {
    $dir = plugin_dir_url( __FILE__ );

    return "<logo-spinner-1></logo-spinner-1>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/runtime.58db6607081ba1289d07.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/polyfills.7e61eeabe4f75fabb7d3.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/main.f4b4f5f8ddc9dc375556.js\"></script>";
}

add_shortcode('logo_spinner_1', 'add_logo_spinner_1');
?>
