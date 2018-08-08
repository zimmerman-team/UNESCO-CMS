<?php
 return array (
  'name' => 'BudgetRequirementsPage',
  'label' => 'Budget & Finance > Requirements Page',
  '_id' => 'BudgetRequirementsPage5b4f3542947da',
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
      'localize' => true,
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
      'localize' => true,
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
  'template' => '',
  'data' => NULL,
  '_created' => 1531917634,
  '_modified' => 1531923087,
  'description' => 'This should contain specific texts for the Budgets & Finance > Requirements page',
  'acl' => 
  array (
  ),
  'icon' => 'form-editor.svg',
);