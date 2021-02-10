<?php

function bs4wp_customize_register($wp_customize){

  //Rodapé
  $wp_customize -> add_section('footer', array(
    'title' => __('Rodapé', 'bs4 + wp'),
    'description' => sprintf(__('Opções para o rodapé','bs4 + wp')),
    'priority' => 20
));

$wp_customize -> add_setting('footer_title', array(
    'default' => _x('Meu primeiro tema de WordPress', 'bs4 + wp'),
    'type' => 'theme_mod'
));

$wp_customize -> add_control('footer_title',array(
    'label' => __('Título do rodapé', 'bs4 + wp'),
    'section' => 'footer',
    'priority' => 1
));

$wp_customize -> add_setting('footer_text', array(
    'default' => _x('Feito por mim com muita dedicação e esforço', 'BS 4 + WP'),
    'type' => 'theme_mod'
));

$wp_customize -> add_control('footer_text',array(
    'label' => __('Texto do rodapé', 'BS 4 + WP'),
    'section' => 'footer',
    'priority' => 2
));
}

add_action('customize_register', 'bs4wp_customize_register');


?>