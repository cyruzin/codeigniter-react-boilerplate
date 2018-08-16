<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


/**
 * 
 * This function loads assets dynamically and stores them in the session.
 * 
 * @param string $name
 * @param string $type
 * 
 * @author Cyro Dubeux
 */
function load_asset($name, $type){
    
    $ci = &get_instance();

    if($type == "js"){
    $asset = "<script src=".base_url("dist/".$name.".$type")."></script>";
    } else {
    $asset =  "<link type='text/css' rel='stylesheet' href=".base_url("dist/".$name.".$type").">";    
    }

    $ci->session->set_flashdata($type.'_asset', $asset);
}