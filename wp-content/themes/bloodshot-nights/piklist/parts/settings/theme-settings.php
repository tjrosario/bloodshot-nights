<?php
/*
Title: Theme Settings Section
Setting: my_theme_settings
*/

include('variables.php');

// social media
piklist('field', array(
  'type' => 'text'
  ,'field' => 'social_facebook'
  ,'label' => 'Facebook'
  ,'description' => 'Facebook Page URL'
  ,'attributes' => array(
    'class' => 'text'
  )
  ,'columns' => 6
));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'social_twitter'
  ,'label' => 'Twitter'
  ,'description' => 'Twitter Page URL'
  ,'attributes' => array(
    'class' => 'text'
  )
  ,'columns' => 6
));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'social_instagram'
  ,'label' => 'Instagram'
  ,'description' => 'Instagram Page URL'
  ,'attributes' => array(
    'class' => 'text'
  )
  ,'columns' => 6
));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'social_email'
  ,'label' => 'Contact Email'
  ,'description' => 'Contact Email Address'
  ,'attributes' => array(
    'class' => 'text'
  )
  ,'columns' => 6
));

// phone number
piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_phone'
  ,'label' => 'Phone Number'
  ,'description' => ''
  ,'attributes' => array(
    'class' => 'text'
  )
  ,'columns' => 6
));

// hours of operation
piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_hours_1'
  ,'label' => 'Hours of Operation (Line 1)'
  ,'description' => ''
  ,'attributes' => array(
    'class' => 'text'
  )
));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_hours_2'
  ,'label' => 'Hours of Operation (Line 2)'
  ,'description' => ''
  ,'attributes' => array(
    'class' => 'text'
  )
));

// address
piklist('field', array(
  'type' => 'group'
  ,'field' => 'company_address_group'
  ,'label' => 'Company Address'
  ,'description' => ''
  ,'add_more' => false
  ,'fields' => array(

    // category
    array(
      'type' => 'text'
      ,'field' => 'company_address_line1'
      ,'label' => 'Address Line 1'
      ,'required' => false
      ,'columns' => 6
    )

    ,array(
      'type' => 'text'
      ,'field' => 'company_address_line2'
      ,'label' => 'Address Line 2'
      ,'required' => false
      ,'columns' => 6
    )

    ,array(
      'type' => 'text'
      ,'field' => 'company_address_city'
      ,'label' => 'City'
      ,'required' => false
      ,'columns' => 4
    )

    ,array(
      'type' => 'select'
      ,'field' => 'company_address_state'
      ,'label' => 'State'
      ,'required' => false
      ,'columns' => 4
      ,'choices' => $states
    )

    ,array(
      'type' => 'text'
      ,'field' => 'company_address_zip'
      ,'label' => 'Zip'
      ,'required' => false
      ,'columns' => 4
    )
  )
));

// copyright
piklist('field', array(
  'type' => 'text'
  ,'field' => 'copyright'
  ,'label' => 'Copyright'
  ,'description' => ''
  ,'attributes' => array(
    'class' => 'text'
  )
  ,'columns' => 6
));
