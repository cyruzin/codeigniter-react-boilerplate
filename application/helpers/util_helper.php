<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * codeigniter-react-boilerplate Util Helpers
 *
 * @package     Util
 * @subpackage  Helpers
 * @category    Helpers
 * @author      Cyro Dubeux
 */

if (!function_exists('load_js')) {
/**
 * Load JS
 *
 * This function loads JavaScript assets dynamically and stores them in the session.
 *
 * @param array $assets Array with the assets names
 * @param string $name Name of the session variable
 *
 * @author Cyro Dubeux
 */
    function load_js($assets = [], $name)
    {
        $CI = &get_instance();

        $asset = [];

        foreach ($assets as $key => $value) {
            $asset[$key] = "<script src=" . base_url("dist/" . $value . ".js") . "></script>\n";
        }

        $CI->session->set_flashdata($name, $asset);
    }
}

if (!function_exists('load_css')) {
/**
 * Load CSS
 *
 * This function loads CSS assets dynamically and stores them in the session.
 *
 * @param array $assets Array with the assets names
 * @param string $name Name of the session variable
 *
 * @author Cyro Dubeux
 */
    function load_css($assets = [], $name)
    {
        $CI = &get_instance();

        $asset = [];

        foreach ($assets as $key => $value) {

            $asset[$key] =
            "<link type='text/css' rel='stylesheet' href=" . base_url("dist/" . $value . ".css") . ">\n";
        }

        $CI->session->set_flashdata($name, $asset);
    }
}

if (!function_exists('print_assets')) {
/**
 * Print Assets
 *
 * This function prints JavaScript/CSS assets.
 *
 * @param array $assets
 *
 * @author Cyro Dubeux
 */
    function print_assets($assets = [])
    {
        if (!empty($assets)) {
            foreach ($assets as $asset) {
                echo $asset;
            }
        }
    }
}
