<?php
function webstation_customizer_function($wp_customize)
{

  // header area Function

  $wp_customize->add_section('webstation_header_area', array(
    'title'     => __('Header Area', 'webstation'),
    'description' => 'If You Intersted to update your header area, You can do it heare.'
  ));


  $wp_customize->add_setting('webstation_logo', array(
    'default' => get_bloginfo('template_directory') . './assets/img/Ramproshaddada1-1.png',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'webstation_logo', array(
    'lable' => 'Logo Upload',
    'setting' => 'webstation_logo',
    'section' => 'webstation_header_area',
    'description' => 'If You Intersted to change your logo.'

  )));

  // header Menu position Options  Function

  $wp_customize->add_section('webstation_header_menu_optioon', array(
    'title'     => __('Header Menu Option', 'webstation'),
    'description' => 'If You Intersted to Change your menu position you can do it.'
  ));


  $wp_customize->add_setting('webstation_menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize->add_control('webstation_menu_position', array(
    'lable' => 'Menu Position',
    'setting' => 'webstation_menu_position',
    'section' => 'webstation_header_menu_optioon',
    'type' => 'radio',
    'choices' => array(

      'leaft_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu'

    ),

  ));

  // Theme Footer  Options  Function

  $wp_customize->add_section('webstation_footer_area_optioon', array(
    'title'     => __('Footer Area', 'webstation'),
    'description' => 'If You Intersted to Change your Footer setting you can do it.'
  ));


  $wp_customize->add_setting('webstation_footer_copyright_section', array(        //'webstation_footer_copyright_section' = setting
    'default' => '&copy; Copyright | webstation',
  ));

  $wp_customize->add_control('webstation_footer_copyright_section', array(            //'webstation_footer_copyright_section' = setting
    'lable' => 'Copyright Text',
    'setting' => 'webstation_footer_copyright_section',                               //'webstation_footer_copyright_section' = setting
    'section' => 'webstation_footer_area_optioon',                                    //'webstation_footer_area_optioon' = option name
    'description' => 'If nedd You can update your copyright text form here.'


  ));
};

add_action('customize_register', 'webstation_customizer_function');