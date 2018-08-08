<?php
 return array (
  'name' => 'AboutPage',
  'label' => 'About Page',
  '_id' => 'AboutPage5b2b7feae50a5',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'TitleTxt',
      'label' => 'Title Text',
      'type' => 'text',
      'default' => '',
      'info' => 'Text for the About Page Title',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    1 => 
    array (
      'name' => 'DescTitleArrayTxt',
      'label' => 'Description Title Texts',
      'type' => 'repeater',
      'default' => '',
      'info' => 'This should contain an array of titles for each part part/paragraph for the description shown in the about page. (Ofcourse if some parts/paragraphs should not have a title this should be created for the appropriate description, but left empty)',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    2 => 
    array (
      'name' => 'DescArrayTxt',
      'label' => 'Description texts',
      'type' => 'repeater',
      'default' => '',
      'info' => 'This should contain an array of texts/paragraphs contained in the description. (Each text/paragraph should be created with a title,the title should be left empty if it is not required for the text/paragraph)',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1529577450,
  '_modified' => 1529577450,
  'color' => '',
  'acl' => 
  array (
  ),
  'rules' => 
  array (
    'create' => 
    array (
      'enabled' => false,
    ),
    'read' => 
    array (
      'enabled' => false,
    ),
    'update' => 
    array (
      'enabled' => false,
    ),
    'delete' => 
    array (
      'enabled' => false,
    ),
  ),
  'icon' => 'info.svg',
  'description' => 'Texts for the about page',
);