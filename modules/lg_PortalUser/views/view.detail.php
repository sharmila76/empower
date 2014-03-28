<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class lg_PortalUserViewDetail extends ViewDetail {

 	function lg_PortalUserViewDetail(){
 		parent::ViewDetail();
 	}
 	
 	function preDisplay() {
 		global $app_list_strings;
 		$app_list_strings['role_list'] = $this->bean->getRolesList();
 		parent::preDisplay();
 	}
}