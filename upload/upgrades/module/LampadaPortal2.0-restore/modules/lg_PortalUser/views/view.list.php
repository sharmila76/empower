<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');

class lg_PortalUserViewList extends ViewList {

 	function lg_PortalUserViewList(){
 		parent::ViewList();
 	}
 	
 	function preDisplay() {
 		global $app_list_strings;
 		$app_list_strings['role_list'] = $this->bean->getRolesList();
 		parent::preDisplay();
 	}
}