<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ctTemplate($type = 'front', $template = 'default') {
    $ci = &get_instance();
    return $ci->config->item('template_path') . '/' . $ci->config->item($type . '_template') . '/' . ($template == 'default' ? $ci->config->item('template_container_file') : $template);
}

function ctView($filename='index',$data=NULL) {
    $ci = &get_instance();
    $ci->load->view($filename, $data);
}
function ctPartial($part = 'front', $data = array(), $type = 'front') {
    $ci = &get_instance();
    $ci->load->view($ci->config->item('template_path') . '/' . $ci->config->item($type . '_template') . '/' . $part, $data);
}

function ctCarabinerDisplay($carabinerAssets = NULL, $type = 'css') {
    if ($carabinerAssets != NULL) {
        $ci = &get_instance();
        $ci->carabiner->display($carabinerAssets, $type);
    }
}
