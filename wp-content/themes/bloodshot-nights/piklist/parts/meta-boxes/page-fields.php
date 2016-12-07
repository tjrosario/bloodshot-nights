<?php
/*
Title: Page Fields
Post Type: page
*/

// page background
piklist('field', array(
  'type' => 'file'
  ,'field' => 'page_background_image'
  ,'label' => __('Page Background Image')
  ,'required' => false
  ,'columns' => 12
  ,'options' => array(
    'basic' => true // set field to basic uploader
  )
));
