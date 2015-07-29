<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ctConfig($item='base_url')
{
    $ci = &get_instance();
    return $ci->config->item($item);
}