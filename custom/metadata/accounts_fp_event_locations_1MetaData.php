<?php
// created: 2021-08-06 13:22:05
$dictionary["accounts_fp_event_locations_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_fp_event_locations_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'FP_Event_Locations',
      'rhs_table' => 'fp_event_locations',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_fp_event_locations_1_c',
      'join_key_lhs' => 'accounts_fp_event_locations_1accounts_ida',
      'join_key_rhs' => 'accounts_fp_event_locations_1fp_event_locations_idb',
    ),
  ),
  'table' => 'accounts_fp_event_locations_1_c',
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
      'name' => 'accounts_fp_event_locations_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_fp_event_locations_1fp_event_locations_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_fp_event_locations_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_fp_event_locations_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_fp_event_locations_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_fp_event_locations_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_fp_event_locations_1fp_event_locations_idb',
      ),
    ),
  ),
);