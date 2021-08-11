<?php
// created: 2021-08-10 13:40:18
$dictionary["AOS_Invoices"]["fields"]["cs_family_aos_invoices_1"] = array (
  'name' => 'cs_family_aos_invoices_1',
  'type' => 'link',
  'relationship' => 'cs_family_aos_invoices_1',
  'source' => 'non-db',
  'module' => 'cs_Family',
  'bean_name' => 'cs_Family',
  'vname' => 'LBL_CS_FAMILY_AOS_INVOICES_1_FROM_CS_FAMILY_TITLE',
  'id_name' => 'cs_family_aos_invoices_1cs_family_ida',
);
$dictionary["AOS_Invoices"]["fields"]["cs_family_aos_invoices_1_name"] = array (
  'name' => 'cs_family_aos_invoices_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CS_FAMILY_AOS_INVOICES_1_FROM_CS_FAMILY_TITLE',
  'save' => true,
  'id_name' => 'cs_family_aos_invoices_1cs_family_ida',
  'link' => 'cs_family_aos_invoices_1',
  'table' => 'cs_family',
  'module' => 'cs_Family',
  'rname' => 'name',
);
$dictionary["AOS_Invoices"]["fields"]["cs_family_aos_invoices_1cs_family_ida"] = array (
  'name' => 'cs_family_aos_invoices_1cs_family_ida',
  'type' => 'link',
  'relationship' => 'cs_family_aos_invoices_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CS_FAMILY_AOS_INVOICES_1_FROM_AOS_INVOICES_TITLE',
);
