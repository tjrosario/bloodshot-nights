<?php
/*
Title: Hero Fields
Post Type: page
*/

include('variables.php');

// headline
piklist('field', array(
  'type' => 'text'
  ,'field' => 'hero_headline'
  ,'label' => __('Hero Headline')
  ,'required' => false
  ,'columns' => 12
  ,'attributes' => array(
    //'placeholder' => 'e.g. - Market Food Pod'
  )
));

// description
piklist('field', array(
  'type' => 'editor'
  ,'field' => 'hero_description'
  ,'label' => __('Hero Description')
  ,'required' => false
  ,'columns' => 12
  ,'options' => array( // Pass any option that is accepted by wp_editor()
    'wpautop' => true,
    'media_buttons' => true,
    'shortcode_buttons' => true,
    'teeny' => false,
    'dfw' => false,
    'quicktags' => true,
    'drag_drop_upload' => true,
    'tinymce' => array(
      'resize' => false,
      'wp_autoresize_on' => true
    )
  )
));

// content width
piklist('field', array(
  'type' => 'select'
  ,'field' => 'hero_content_theme'
  ,'label' => __('Hero Content Theme', 'menu-metabox')
  ,'columns' => 3
  ,'choices' => array(
    '--goldred' => 'Gold / Red',
    '--navygold' => 'Navy / Gold'
  )
  ,'value' => '--goldred'
));

// content width
piklist('field', array(
  'type' => 'select'
  ,'field' => 'hero_content_width'
  ,'label' => __('Hero Content Width', 'menu-metabox')
  ,'columns' => 3
  ,'choices' => $columns
  ,'value' => 'span5-5'
));

// content position
piklist('field', array(
  'type' => 'select'
  ,'field' => 'hero_content_position'
  ,'label' => __('Hero Content Position', 'menu-metabox')
  ,'columns' => 3
  ,'choices' => array(
    'position-left' => 'Left',
    'position-center' => 'Center'
  )
  ,'value' => 'position-center'
));

// call to action
piklist('field', array(
  'type' => 'text'
  ,'field' => 'hero_cta'
  ,'label' => __('Hero Call to Action')
  ,'required' => false
  ,'columns' => 12
  ,'attributes' => array(
    //'placeholder' => 'e.g. - Explore Menu'
  )
));

// image
piklist('field', array(
  'type' => 'file'
  ,'field' => 'hero_image'
  ,'label' => __('Hero Image')
  ,'required' => false
  ,'columns' => 12
  ,'options' => array(
    'basic' => true // set field to basic uploader
  )
));
