<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
 


require_once('iportal/include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonQuickCreate.php');

class SugarWidgetSubPanelTopCreateAccountNameButton extends SugarWidgetSubPanelTopButtonQuickCreate
{
	function display($defines)
	{
	
		
		global $app_strings;
		global $currentModule;

		$title = $app_strings['LBL_NEW_BUTTON_TITLE'];
		$accesskey = $app_strings['LBL_NEW_BUTTON_KEY'];
		$value = $app_strings['LBL_NEW_BUTTON_LABEL'];
		$this->module = 'Contacts';
		if( ACLController::moduleSupportsACL($defines['module'])  && !ACLController::checkAccess($defines['module'], 'edit', true)){
			$button = "<input title='$title'class='button' type='button' name='button' value='  $value  ' disabled/>\n";
			return $button;
		}
		
		$additionalFormFields = array();
		if(isset($defines['focus']->billing_address_street)) 
			$additionalFormFields['primary_address_street'] = $defines['focus']->billing_address_street;
		if(isset($defines['focus']->billing_address_city)) 
			$additionalFormFields['primary_address_city'] = $defines['focus']->billing_address_city;						  		
		if(isset($defines['focus']->billing_address_state)) 
			$additionalFormFields['primary_address_state'] = $defines['focus']->billing_address_state;
		if(isset($defines['focus']->billing_address_country)) 
			$additionalFormFields['primary_address_country'] = $defines['focus']->billing_address_country;
		if(isset($defines['focus']->billing_address_postalcode)) 
			$additionalFormFields['primary_address_postalcode'] = $defines['focus']->billing_address_postalcode;
		if(isset($defines['focus']->phone_office)) 
			$additionalFormFields['phone_work'] = $defines['focus']->phone_office;
		
		
		$button = $this->_get_form($defines, $additionalFormFields);
		$button .= "<input title='$title' accesskey='$accesskey' class='button' type='submit' name='{$this->getWidgetId()}_create_button' id='{$this->getWidgetId()}_create_button' value='  $value  '/>\n";
		$button .= "</form>";
		return $button;
	}
}
?>