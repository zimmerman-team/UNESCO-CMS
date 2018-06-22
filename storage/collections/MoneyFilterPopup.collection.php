<?php
 return array (
  'name' => 'MoneyFilterPopup',
  'label' => 'Money Filter Popup',
  '_id' => 'MoneyFilterPopup5b2b91f6126ec',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'MinText',
      'label' => 'Min Text',
      'type' => 'text',
      'default' => '',
      'info' => 'Text for word \'Min\' (how the whole thing would look in the filter popup: \'Min US$ 12345\' )',
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
      'name' => 'MaxText',
      'label' => 'Max Text',
      'type' => 'text',
      'default' => '',
      'info' => 'Text for word \'Max\' (how the whole thing would look in the filter popup: \'Max US$ 12345\' )',
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
      'name' => 'ApplyButTxt',
      'label' => 'Apply Button Text',
      'type' => 'text',
      'default' => '',
      'info' => 'Text for the \'Apply\' button in the money filter popup',
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
      'name' => 'CancelButTxt',
      'label' => 'Cancel Button Text',
      'type' => 'text',
      'default' => '',
      'info' => 'Text for the \'Cancel\' button in the money filter popup',
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
  '_created' => 1529582070,
  '_modified' => 1529582070,
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
  'description' => 'Texts which will be in the popup when the user chuses to filter by money(examples: \'Select budget\', \'Expenditures\', and maybe more in the future)',
);