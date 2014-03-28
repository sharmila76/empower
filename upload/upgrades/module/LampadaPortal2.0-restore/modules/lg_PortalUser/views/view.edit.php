<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class lg_PortalUserViewEdit extends ViewEdit {

 	function lg_PortalUserViewEdit(){
 		parent::ViewEdit();
 	}
 	
 	function preDisplay() {
 		global $app_list_strings;
 		$app_list_strings['role_list'] = $this->bean->getRolesList();
 		
 		
 		if(isset($_REQUEST['contact_record']) AND !empty($_REQUEST['contact_record'])) {
 			
 			include_once("modules/Contacts/Contact.php");
 			$contact = new Contact();
 			$contact->retrieve($_REQUEST['contact_record']);
 			$this->bean->name = $contact->first_name;
 			$this->bean->contacts_lg_portaluser_name = $contact->name;
 			$this->bean->contacts_l86fcontacts_ida = $contact->id;
 		}
 		
 		parent::preDisplay();
 	}
}
 	