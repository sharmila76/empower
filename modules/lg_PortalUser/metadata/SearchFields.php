<?php
// created: 2010-11-29 13:16:57
$searchFields = array (
  'lg_PortalUser' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites
								WHERE sugarfavorites.deleted=0
									and sugarfavorites.module = \'lg_PortalUser\'
									and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
  ),
);
?>
