<?php
/*
Title: Menu Fields
Post Type: page
*/

include('variables.php');

piklist('field', array(
  'type' => 'group'
  ,'field' => 'menu_section'
  ,'label' => __('Menu', 'menu-metabox')
  ,'add_more' => true
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'menu_title'
      ,'label' => __('Menu Title', 'menu-metabox')
      ,'columns' => 12
    )
    ,array(
      'type' => 'select'
      ,'field' => 'menu_title_font'
      ,'label' => __('Menu Title Font', 'menu-metabox')
      ,'columns' => 3
      ,'choices' => $fonts
      ,'value' => 'industry_incbevel'
    )
    ,array(
      'type' => 'select'
      ,'field' => 'menu_title_color'
      ,'label' => __('Menu Title Color', 'menu-metabox')
      ,'columns' => 3
      ,'choices' => $colors
      ,'value' => '#3d5265'
    )
    ,array(
      'type' => 'select'
      ,'field' => 'menu_title_alignment'
      ,'label' => __('Menu Title Alignment', 'menu-metabox')
      ,'columns' => 3
      ,'choices' => $alignments
      ,'value' => 'align-left'
    )
    ,array(
      'type' => 'select'
      ,'field' => 'menu_width'
      ,'label' => __('Menu Width', 'menu-metabox')
      ,'columns' => 3
      ,'choices' => $columns
      ,'value' => 'span5-5'
    )
    ,array(
      'type' => 'number'
      ,'field' => 'menu_coordinate_x'
      ,'label' => __('Menu Offset Left (X-axis)', 'menu-metabox')
      ,'columns' => 3
      ,'attributes' => array(
        'min' => 'none'
      )
    )
    ,array(
      'type' => 'number'
      ,'field' => 'menu_coordinate_y'
      ,'label' => __('Menu Offset Top (Y-axis)', 'menu-metabox')
      ,'columns' => 3
      ,'attributes' => array(
        'min' => 'none'
      )
    )
    ,array(
      'type' => 'select'
      ,'field' => 'menu_alignment'
      ,'label' => __('Menu Content Alignment', 'menu-metabox')
      ,'columns' => 3
      ,'choices' => $alignments
      ,'value' => 'align-left'
    )
    ,array(
      'type' => 'radio'
      ,'field' => 'menu_layout'
      ,'label' => __('Menu Layout', 'menu-fields')
      ,'columns' => 4
      ,'choices' => array(
        'list' => 'List'
        ,'grid' => 'Grid'
      )
    )
    ,array(
      'type' => 'radio'
      ,'field' => 'menu_break_after'
      ,'label' => __('Break After', 'menu-fields')
      ,'help' => "Any proceeding menu will appear on next line"
      ,'columns' => 4
      ,'choices' => array(
        '--break-after' => 'Yes'
        ,'' => 'No'
      )
      ,'value' => ''
    )
    ,array(
      'type' => 'select'
      ,'field' => 'menu_serving_sizes'
      ,'label' => __('Serving Sizes', 'menu-fields')
      ,'columns' => 4
      ,'choices' => $serving_sizes
      ,'attributes' => array(
        'multiple' => 'multiple'
      )
    )
    ,array(
      'type' => 'group'
      ,'field' => 'menu_item'
      ,'add_more' => true
      ,'fields' => array(
        array(
          'type' => 'text'
          ,'field' => 'menu_item_name'
          ,'label' => __('Item Name', 'menu-metabox')
          ,'columns' => 6
        )
        ,array(
          'type' => 'select'
          ,'field' => 'menu_item_font'
          ,'label' => __('Item Name Font', 'menu-metabox')
          ,'choices' => $fonts
          ,'value' => 'Pathway Gothic One'
          ,'columns' => 3
        )
        ,array(
          'type' => 'select'
          ,'field' => 'menu_item_color'
          ,'label' => __('Item Name Color', 'menu-metabox')
          ,'choices' => $colors
          ,'value' => '#3d5265'
          ,'columns' => 3
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_description'
          ,'label' => __('Item Description', 'menu-metabox')
          ,'columns' => 12
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_price1'
          ,'label' => __('Item Price #1', 'menu-metabox')
          ,'columns' => 3
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_price2'
          ,'label' => __('Item Price #2', 'menu-metabox')
          ,'columns' => 3
        )
        ,array(
          'type' => 'select'
          ,'field' => 'menu_item_price_color'
          ,'label' => __('Item Price Color', 'menu-metabox')
          ,'choices' => $colors
          ,'value' => '#afb5bc'
          ,'columns' => 3
        )

        ,array(
          'type' => 'radio'
          ,'field' => 'menu_item_type'
          ,'label' => __('Item Type', 'menu-metabox')
          ,'choices' => array(
            'regular' => 'Regular',
            'addon' => 'Add On',
          )
          ,'value' => 'regular'
          ,'columns' => 6
        )
        ,array(
          'type' => 'checkbox'
          ,'field' => 'menu_item_grouping'
          ,'label' => __('Item Group', 'menu-metabox')
          ,'help' => "Gives a Grouping Style To Item Header.  Recommended when an item has subitems."
          ,'choices' => array(
              true => 'Enable'
            )
          ,'columns' => 6
        )
        ,array(
          'type' => 'group'
          ,'field' => 'menu_subitem'
          ,'add_more' => true
          ,'fields' => array(
            array(
              'type' => 'text'
              ,'field' => 'menu_subitem_name'
              ,'label' => __('Subitem Name', 'menu-metabox')
              ,'columns' => 9
            )
            ,array(
              'type' => 'text'
              ,'field' => 'menu_subitem_description'
              ,'label' => __('Subitem Description', 'menu-metabox')
              ,'columns' => 12
            )
            ,array(
              'type' => 'text'
              ,'field' => 'menu_subitem_price1'
              ,'label' => __('Subitem Price #1', 'menu-metabox')
              ,'columns' => 6
            )
            ,array(
              'type' => 'text'
              ,'field' => 'menu_subitem_price2'
              ,'label' => __('Subitem Price #2', 'menu-metabox')
              ,'columns' => 6
            )
          )
        )
      )
    )
  )
));

