<?php
// created: 2021-08-10 10:18:16
$dictionary["FP_Event_Locations"]["fields"]["cs_family_fp_event_locations_1"] = array (
  'name' => 'cs_family_fp_event_locations_1',
  'type' => 'link',
  'relationship' => 'cs_family_fp_event_locations_1',
  'source' => 'non-db',
  'module' => 'cs_Family',
  'bean_name' => 'cs_Family',
  'vname' => 'LBL_CS_FAMILY_FP_EVENT_LOCATIONS_1_FROM_CS_FAMILY_TITLE',
  'id_name' => 'cs_family_fp_event_locations_1cs_family_ida',
);
$dictionary["FP_Event_Locations"]["fields"]["cs_family_fp_event_locations_1_name"] = array (
  'name' => 'cs_family_fp_event_locations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CS_FAMILY_FP_EVENT_LOCATIONS_1_FROM_CS_FAMILY_TITLE',
  'save' => true,
  'id_name' => 'cs_family_fp_event_locations_1cs_family_ida',
  'link' => 'cs_family_fp_event_locations_1',
  'table' => 'cs_family',
  'module' => 'cs_Family',
  'rname' => 'name',
);
$dictionary["FP_Event_Locations"]["fields"]["cs_family_fp_event_locations_1cs_family_ida"] = array (
  'name' => 'cs_family_fp_event_locations_1cs_family_ida',
  'type' => 'link',
  'relationship' => 'cs_family_fp_event_locations_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CS_FAMILY_FP_EVENT_LOCATIONS_1_FROM_CS_FAMILY_TITLE',
);
