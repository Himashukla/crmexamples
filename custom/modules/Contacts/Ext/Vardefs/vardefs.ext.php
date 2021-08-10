<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-08-09 06:19:32
$dictionary["Contact"]["fields"]["contacts_fp_event_locations_1"] = array (
  'name' => 'contacts_fp_event_locations_1',
  'type' => 'link',
  'relationship' => 'contacts_fp_event_locations_1',
  'source' => 'non-db',
  'module' => 'FP_Event_Locations',
  'bean_name' => 'FP_Event_Locations',
  'vname' => 'LBL_CONTACTS_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'id_name' => 'contacts_fp_event_locations_1fp_event_locations_idb',
);
$dictionary["Contact"]["fields"]["contacts_fp_event_locations_1_name"] = array (
  'name' => 'contacts_fp_event_locations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'save' => true,
  'id_name' => 'contacts_fp_event_locations_1fp_event_locations_idb',
  'link' => 'contacts_fp_event_locations_1',
  'table' => 'fp_event_locations',
  'module' => 'FP_Event_Locations',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["contacts_fp_event_locations_1fp_event_locations_idb"] = array (
  'name' => 'contacts_fp_event_locations_1fp_event_locations_idb',
  'type' => 'link',
  'relationship' => 'contacts_fp_event_locations_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CONTACTS_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
);


 // created: 2021-08-06 13:05:30
$dictionary['Contact']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2021-08-06 13:05:30
$dictionary['Contact']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2021-08-06 13:05:30
$dictionary['Contact']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2021-08-06 13:05:30
$dictionary['Contact']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>