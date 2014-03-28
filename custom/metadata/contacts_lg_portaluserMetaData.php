<?php
// created: 2010-12-06 18:52:00
$dictionary["contacts_lg_portaluser"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_lg_portaluser' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'lg_PortalUser',
      'rhs_table' => 'lg_portaluser',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_lg_portaluser_c',
      'join_key_lhs' => 'contacts_l86fcontacts_ida',
      'join_key_rhs' => 'contacts_ld6e8taluser_idb',
    ),
  ),
  'table' => 'contacts_lg_portaluser_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'contacts_l86fcontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_ld6e8taluser_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_lg_portaluserspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_lg_portaluser_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_l86fcontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'contacts_lg_portaluser_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_ld6e8taluser_idb',
      ),
    ),
  ),
);
?>
