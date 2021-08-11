<?php
 // created: 2021-08-10 13:40:18
$layout_defs["cs_Family"]["subpanel_setup"]['cs_family_aos_invoices_1'] = array (
  'order' => 100,
  'module' => 'AOS_Invoices',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CS_FAMILY_AOS_INVOICES_1_FROM_AOS_INVOICES_TITLE',
  'get_subpanel_data' => 'cs_family_aos_invoices_1',
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
