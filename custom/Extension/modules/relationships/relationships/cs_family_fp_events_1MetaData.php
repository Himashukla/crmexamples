<?php
// created: 2021-08-11 06:35:13
$dictionary["cs_family_fp_events_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cs_family_fp_events_1' => 
    array (
      'lhs_module' => 'cs_Family',
      'lhs_table' => 'cs_family',
      'lhs_key' => 'id',
      'rhs_module' => 'FP_events',
      'rhs_table' => 'fp_events',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cs_family_fp_events_1_c',
      'join_key_lhs' => 'cs_family_fp_events_1cs_family_ida',
      'join_key_rhs' => 'cs_family_fp_events_1fp_events_idb',
    ),
  ),
  'table' => 'cs_family_fp_events_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'cs_family_fp_events_1cs_family_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cs_family_fp_events_1fp_events_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cs_family_fp_events_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cs_family_fp_events_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cs_family_fp_events_1cs_family_ida',
        1 => 'cs_family_fp_events_1fp_events_idb',
      ),
    ),
  ),
);