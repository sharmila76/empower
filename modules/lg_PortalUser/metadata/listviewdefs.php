<?php
$module_name = 'lg_PortalUser';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ROLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_ROLE',
    'default' => true,
  ),
  'CONTACTS_LG_PORTALUSER_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'contacts_lg_portaluser',
    'label' => 'LBL_CONTACTS_LG_PORTALUSER_FROM_CONTACTS_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => true,
  ),
);
?>
