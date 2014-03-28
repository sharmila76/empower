<?php
$module_name = 'OSS_TeamMember';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'first_name' => 
      array (
        'name' => 'first_name',
        'label' => 'LBL_FIRST_NAME',
        'default' => true,
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'label' => 'LBL_LAST_NAME',
        'default' => true,
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'default' => true,
        'label' => 'address_city',
      ),
      'created_by_name' => 
      array (
        'name' => 'created_by_name',
        'label' => 'LBL_CREATED',
        'default' => true,
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
