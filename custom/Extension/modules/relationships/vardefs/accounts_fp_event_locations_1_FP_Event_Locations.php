<?php
// created: 2021-08-06 13:22:05
$dictionary["FP_Event_Locations"]["fields"]["accounts_fp_event_locations_1"] = array (
  'name' => 'accounts_fp_event_locations_1',
  'type' => 'link',
  'relationship' => 'accounts_fp_event_locations_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_fp_event_locations_1accounts_ida',
);
$dictionary["FP_Event_Locations"]["fields"]["accounts_fp_event_locations_1_name"] = array (
  'name' => 'accounts_fp_event_locations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_fp_event_locations_1accounts_ida',
  'link' => 'accounts_fp_event_locations_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["FP_Event_Locations"]["fields"]["accounts_fp_event_locations_1accounts_ida"] = array (
  'name' => 'accounts_fp_event_locations_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_fp_event_locations_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_ACCOUNTS_TITLE',
);
