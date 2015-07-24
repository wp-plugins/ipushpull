<?php
/*
Plugin Name: iPushPull
Plugin URI: http://wordpress.org/plugins/ipushpull/
Description: iPushPull plugin
Author: iPushPull
Version: 1.0
Author URI: https://www.ipushpull.com
*/


/**
 * @param $atts
 * @param null $content
 * @return string
 *
 * Create ipushpull_page shortcode
 */
function ippEmbedMarkup($atts, $content = null) {
    extract(shortcode_atts(array(
        "page" => null,
        "folder" => null,
        "back" => false,
        "login" => false,
        "width" => '100%',
        "height" => '400px',
        "interval" => null
    ),$atts));

    if (!$page || !$folder)
        return '';

    // Process back and login
    $back = ($back || $back=='yes')?1:0;
    $login = ($login || $login=='yes')?1:0;

    $attrs = array(
        'id'=>'ippPage_'.$folder.'_'.$page,
        'name'=>'ipp_page_'.$folder.'_'.$page,
        'class' => 'ipushpull-page',
        'style' => 'width:'.$width.';height:'.$height.';border:none;',
        'width' => $width,
        'height' => $height,
        'border' => '0',
        'src' => 'https://www.ipushpull.com/embed/'.$folder.'/'.$page.'/?back='.$back.'&login='.$login.(($interval)?'&pull_interval='.$interval:'')
    );

    $markup = '<iframe';

    foreach($attrs as $key => $val){
        $markup .= ' '.$key.'="'.$val.'"';
    }

    $markup .= '></iframe>';
    return $markup;
}

add_shortcode('ipushpull_page','ippEmbedMarkup');