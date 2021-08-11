<?php
 // created: 2021-08-11 06:35:13
$layout_defs["FP_events"]["subpanel_setup"]['cs_family_fp_events_1'] = array (
  'order' => 100,
  'module' => 'cs_Family',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CS_FAMILY_FP_EVENTS_1_FROM_CS_FAMILY_TITLE',
  'get_subpanel_data' => 'cs_family_fp_events_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
