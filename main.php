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
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/runtime.95ba26ba764e20834375.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/polyfills.b79c9d41d08722089ce4.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/main.d68e4757c37bb71d632f.js\"></script>";
}

add_shortcode('logo_spinner_1', 'add_logo_spinner_1');
?>
