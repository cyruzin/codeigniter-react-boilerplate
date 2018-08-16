<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 
 * This function loads JavaScript assets dynamically and stores them in the session.
 * 
 * @param array $assets
 * 
 * @author Cyro Dubeux
 */
function load_js($assets = []){
    
    $ci = &get_instance();

    $asset = [];
    foreach ($assets as $key => $value) {
            $asset[$key] = "<script src=".base_url("dist/".$value.".js")."></script>";
            $ci->session->set_flashdata('js_assets', $asset);
    }
}

/**
 * 
 * This function loads CSS assets dynamically and stores them in the session.
 * 
 * @param array $assets
 * 
 * @author Cyro Dubeux
 */
function load_css($assets = []){
    
    $ci = &get_instance();

    $asset = [];
    foreach ($assets as $key => $value) {
            $asset[$key] = 
            "<link type='text/css' rel='stylesheet' href=".base_url("dist/".$value.".css").">";
            $ci->session->set_flashdata('css_assets', $asset);
        }
}

/**
 * 
 * This function prints JavaScript/CSS assets.
 * 
 * @param array $assets
 * 
 * @author Cyro Dubeux
 */
function print_assets($assets = []){
    if(!empty($assets)){
     foreach ($assets as $asset) {
        echo $asset;          
    }
}
}