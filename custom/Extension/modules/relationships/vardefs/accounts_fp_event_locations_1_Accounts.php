<?php
// created: 2021-08-06 13:22:05
$dictionary["Account"]["fields"]["accounts_fp_event_locations_1"] = array (
  'name' => 'accounts_fp_event_locations_1',
  'type' => 'link',
  'relationship' => 'accounts_fp_event_locations_1',
  'source' => 'non-db',
  'module' => 'FP_Event_Locations',
  'bean_name' => 'FP_Event_Locations',
  'vname' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'id_name' => 'accounts_fp_event_locations_1fp_event_locations_idb',
);
$dictionary["Account"]["fields"]["accounts_fp_event_locations_1_name"] = array (
  'name' => 'accounts_fp_event_locations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'save' => true,
  'id_name' => 'accounts_fp_event_locations_1fp_event_locations_idb',
  'link' => 'accounts_fp_event_locations_1',
  'table' => 'fp_event_locations',
  'module' => 'FP_Event_Locations',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["accounts_fp_event_locations_1fp_event_locations_idb"] = array (
  'name' => 'accounts_fp_event_locations_1fp_event_locations_idb',
  'type' => 'link',
  'relationship' => 'accounts_fp_event_locations_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
);
