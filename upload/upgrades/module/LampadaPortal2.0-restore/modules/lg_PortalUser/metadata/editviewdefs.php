<?php
$module_name = 'lg_PortalUser';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/lg_PortalUser/lg_PortalUser.js',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'role',
            'studio' => 'visible',
            'label' => 'LBL_ROLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'password',
            'label' => 'LBL_PASSWORD',
            'type' => 'password',
            'customCode' => '<input id="password" name="password" type="password" size="30" maxlength="255" value=""><input id="old_password" name="old_password" type="hidden" value="{$fields.password.value}" />',
          ),
          1 => 
          array (
            'name' => 'confirm_password',
            'label' => 'LBL_CONFIRM_PASSWORD',
            'type' => 'password',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'contacts_lg_portaluser_name',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
      ),
    ),
  ),
);
?>
