<?php
$hook_version = 1;
$hook_array['before_save'][] = array(
	1,
	'portaluser_encrypt_password',
	'custom/modules/lg_PortalUser/lg_PortalUserLogicHooks.php',
	'lg_PortalUserLogicHooks',
	'encryptPassword',
);