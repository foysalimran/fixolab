<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

//
// Metabox of the PAGE
// Set a unique slug-like ID
//
$prefix_page_opts = 'ta_metabox';

//
// Create a metabox
//
CSF::createMetabox($prefix_page_opts, array(
  'title'        => __('Portfolio options', 'fixolab'),
  'post_type'    => 'portfolio',
  'show_restore' => true,
));

//
// Create a section
//
CSF::createSection($prefix_page_opts, array(
  'title'  => 'Overview',
  'icon'   => 'fas fa-rocket',
  'fields' => array(


    array(
      'id'     => 'our-contribution',
      'type'   => 'repeater',
      'title'  => __('Our Contribution', 'fixolab'),
      'fields' => array(
        array(
          'id'    => 'item',
          'type'  => 'text',
          'title' => __('Contribution item', 'fixolab'),
        ),
      ),

    ),

    array(
      'id'    => 'date-started',
      'type'  => 'date',
      'title' => 'Start On',
    ),

    array(
      'id'    => 'live-link',
      'type'  => 'link',
      'title' => 'Live link',
    ),


  )
));


