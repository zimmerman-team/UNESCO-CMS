<?php
 return array (
  'name' => 'MapPage',
  'label' => 'Country Projects/Map Page',
  '_id' => 'MapPage5b2b9a83c446f',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'ExpendPluralTxt',
      'label' => 'Map Expenditures PLURAL Text',
      'type' => 'text',
      'default' => '',
      'info' => 'Text for the \'Expenditures\' word(PLURAL), that is shown as part of the map',
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
      'name' => 'UnspecifiedTxt',
      'label' => 'Map Unspecified Text',
      'type' => 'text',
      'default' => '',
      'info' => 'Text for the \'Unspecified\' word which is shown as part of the map, where the expenditures for contries IS unspecified',
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
      'name' => 'ExpendPopupTxt',
      'label' => 'Map Expenditure popup SINGULAR Text',
      'type' => 'text',
      'default' => '',
      'info' => 'Text for the \'Expenditure\' word(SINGULAR), that is shown as part of the map popup',
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
    3 => 
    array (
      'name' => 'BudgetPopupTxt',
      'label' => 'Map Budget popup Text',
      'type' => 'text',
      'default' => '',
      'info' => 'Text for the \'Budget\' word, that is shown as part of the map popup',
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
    4 => 
    array (
      'name' => 'ProjectsPopupTxt',
      'label' => 'Map Projects popup Text',
      'type' => 'text',
      'default' => '',
      'info' => 'Text for the \'Projects\' word, that is shown as part of the map popup',
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
    5 => 
    array (
      'name' => 'ViewPopupTxt',
      'label' => 'Map \'VIEW COUNTRY PAGE\' popup Text',
      'type' => 'text',
      'default' => '',
      'info' => 'Text for the \'VIEW COUNTRY PAGE\' word, that is shown as part of the map popup AND which if clicked redirects the user to the countries detail page',
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
  '_created' => 1529584259,
  '_modified' => 1529584297,
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
  'icon' => 'globe.svg',
  'description' => 'This should contain texts that will be shown in the map, which is the main part of the Country Projects page. NOTE: There\'s also a popup in the map which appears when the user hovers over a country, the popup shows the project amount, budget, expenditure associated with the country.',
);