<?php
// created: 2021-08-10 10:18:16
$dictionary["cs_Family"]["fields"]["cs_family_fp_event_locations_1"] = array (
  'name' => 'cs_family_fp_event_locations_1',
  'type' => 'link',
  'relationship' => 'cs_family_fp_event_locations_1',
  'source' => 'non-db',
  'module' => 'FP_Event_Locations',
  'bean_name' => 'FP_Event_Locations',
  'vname' => 'LBL_CS_FAMILY_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'id_name' => 'cs_family_fp_event_locations_1fp_event_locations_idb',
);
$dictionary["cs_Family"]["fields"]["cs_family_fp_event_locations_1_name"] = array (
  'name' => 'cs_family_fp_event_locations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CS_FAMILY_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'save' => true,
  'id_name' => 'cs_family_fp_event_locations_1fp_event_locations_idb',
  'link' => 'cs_family_fp_event_locations_1',
  'table' => 'fp_event_locations',
  'module' => 'FP_Event_Locations',
  'rname' => 'name',
);
$dictionary["cs_Family"]["fields"]["cs_family_fp_event_locations_1fp_event_locations_idb"] = array (
  'name' => 'cs_family_fp_event_locations_1fp_event_locations_idb',
  'type' => 'link',
  'relationship' => 'cs_family_fp_event_locations_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CS_FAMILY_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
);
