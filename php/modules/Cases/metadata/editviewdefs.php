<?php
// created: 2015-08-29 15:47:51
$viewdefs['Cases']['EditView'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'tabDefs' => 
    array (
      'LBL_CASE_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_case_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'case_number',
          'type' => 'readonly',
        ),
      ),
      1 => 
      array (
        0 => 'priority',
      ),
      2 => 
      array (
        0 => 'status',
        1 => 'account_name',
      ),
      3 => 
      array (
        0 => 'type',
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'size' => 75,
          ),
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'nl2br' => true,
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'resolution',
          'nl2br' => true,
        ),
      ),
    ),
    'LBL_PANEL_ASSIGNMENT' => 
    array (
      0 => 
      array (
        0 => 'assigned_user_name',
      ),
    ),
  ),
);