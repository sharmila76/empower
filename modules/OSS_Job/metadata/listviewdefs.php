<?php
$module_name = 'OSS_Job';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TARGETDATETOHIRE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_TARGETDATETOHIRE',
    'width' => '10%',
  ),
  'NO_OFVACANCIES_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_NO_OFVACANCIES',
    'width' => '10%',
  ),
  'NOOFCANDIDATE_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_NOOFCANDIDATE_C',
    'width' => '10%',
  ),
  'PROJECT_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PROJECT',
    'width' => '10%',
  ),
  'CLIENT_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CLIENT',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'created_by_link',
    'label' => 'LBL_CREATED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => false,
  ),
);
?>
