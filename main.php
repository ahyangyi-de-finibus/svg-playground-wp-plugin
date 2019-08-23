<?php
/*
* Plugin Name: SVG Playground
* Description: Include a few SVG-related demos with shortcode [logo_spinner_1]
* Version: 1.0.2
* Author: Yi Yang
* Author URI: https://blog.ahyangyi.org
*/

function add_logo_spinner_1() {
    $dir = plugin_dir_url( __FILE__ );

    return "<logo-spinner-1></logo-spinner-1>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/runtime-es5.96033ac6f5c546d52d0b.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/polyfills-es5.f24fb8cb85b392c952f0.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/logo_spinner_1/main-es5.572970c32bc49acbc3ed.js\"></script>";
}

add_shortcode('logo_spinner_1', 'add_logo_spinner_1');
?>
