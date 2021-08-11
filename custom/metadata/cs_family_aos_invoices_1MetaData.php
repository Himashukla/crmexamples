<?php
// created: 2021-08-10 13:40:18
$dictionary["cs_family_aos_invoices_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cs_family_aos_invoices_1' => 
    array (
      'lhs_module' => 'cs_Family',
      'lhs_table' => 'cs_family',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Invoices',
      'rhs_table' => 'aos_invoices',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cs_family_aos_invoices_1_c',
      'join_key_lhs' => 'cs_family_aos_invoices_1cs_family_ida',
      'join_key_rhs' => 'cs_family_aos_invoices_1aos_invoices_idb',
    ),
  ),
  'table' => 'cs_family_aos_invoices_1_c',
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
      'name' => 'cs_family_aos_invoices_1cs_family_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cs_family_aos_invoices_1aos_invoices_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cs_family_aos_invoices_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cs_family_aos_invoices_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cs_family_aos_invoices_1cs_family_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cs_family_aos_invoices_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cs_family_aos_invoices_1aos_invoices_idb',
      ),
    ),
  ),
);