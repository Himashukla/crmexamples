<?php
$module_name = 'cs_Family';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'cs_family_fp_event_locations_1_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'related_account_c',
            'studio' => 'visible',
            'label' => 'LBL_RELATED_ACCOUNT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
