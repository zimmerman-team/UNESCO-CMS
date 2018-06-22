<?php
 return array (
  'name' => 'BudgetRequirementsPage',
  'label' => 'Budget & Finance > Requirements Page',
  '_id' => 'BudgetRequirementsPage5b2ba86b51577',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'SubHeaderTitle',
      'label' => 'Sub-Header Title',
      'type' => 'text',
      'default' => '',
      'info' => 'Title for a random sub-header on this page',
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
      'name' => 'DescTxt',
      'label' => 'Description texts/paragraphs',
      'type' => 'repeater',
      'default' => '',
      'info' => 'This should contain an array of texts/paragraphs contained in the random description that will be shown at the bottom of this page(underneath the title obviously).',
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
  '_created' => 1529587819,
  '_modified' => 1529587819,
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
  'icon' => 'form-editor.svg',
  'description' => 'This should contain specific texts for the Budgets & Finance > Requirements page',
);