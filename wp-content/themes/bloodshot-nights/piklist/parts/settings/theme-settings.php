<?php
/*
Title: Theme Settings Section
Setting: my_theme_settings
*/

include('variables.php');

piklist('field', array(
  'type' => 'group'
  ,'field' => 'locations'
  ,'label' => __('Locations', 'menu-metabox')
  ,'add_more' => true
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'location_street1'
      ,'label' => __('Street Address 1', 'menu-metabox')
      ,'columns' => 6
    )
    ,array(
      'type' => 'text'
      ,'field' => 'location_street2'
      ,'label' => __('Street Address 2', 'menu-metabox')
      ,'columns' => 6
    )
    ,array(
      'type' => 'text'
      ,'field' => 'location_city'
      ,'label' => __('City', 'menu-metabox')
      ,'columns' => 3
    )
    ,array(
      'type' => 'select'
      ,'field' => 'location_state'
      ,'label' => __('State', 'menu-metabox')
      ,'columns' => 3
      ,'choices' => $states
    )
    ,array(
      'type' => 'text'
      ,'field' => 'location_zip'
      ,'label' => __('ZIP', 'menu-metabox')
      ,'columns' => 3
    )
    ,array(
      'type' => 'text'
      ,'field' => 'location_phone'
      ,'label' => __('Phone', 'menu-metabox')
      ,'columns' => 3
    )
    ,array(
      'type' => 'text'
      ,'field' => 'location_grubhub'
      ,'label' => __('GrubHub URL', 'menu-metabox')
      ,'columns' => 6
    )
    ,array(
      'type' => 'text'
      ,'field' => 'location_doordash'
      ,'label' => __('DoorDash URL', 'menu-metabox')
      ,'columns' => 6
    )
    ,array(
      'type' => 'text'
      ,'field' => 'location_postmates'
      ,'label' => __('Postmates URL', 'menu-metabox')
      ,'columns' => 6
    )
    ,array(
      'type' => 'text'
      ,'field' => 'location_uber_eats'
      ,'label' => __('Uber Eats URL', 'menu-metabox')
      ,'columns' => 6
    )
  )
));

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
