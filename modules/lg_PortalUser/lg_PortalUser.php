<?PHP
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Professional Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-professional-eula.html
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
 * by SugarCRM are Copyright (C) 2004-2009 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/lg_PortalUser/lg_PortalUser_sugar.php');

/**
 * This is the bean that represents and handle a Portal User
 * 
 * @author davi
 *
 */
class lg_PortalUser extends lg_PortalUser_sugar {
	
	/**
	 * A List with all the roles that can be assigned to a Portal User
	 * @var unknown_type
	 */
	private $roles_list;
	
	function lg_PortalUser(){	
		parent::lg_PortalUser_sugar();
	}
	
	function save($check_notify = FALSE) {
		
		//Davi - TK - Encrypt passwords
		if(empty($_POST['old_password']) || !empty($this->password)) {
			$this->password = md5($this->password);
		} else {
			$this->password = $_POST['old_password'];
		}
		
		return parent::save($check_notify);
	}
	
	/**
	 * Retrieve a list with all roles that can be assigned to a Portal User.
	 * 
	 * Actually we get all the roles assigned to user specified in 'default_user_id', 
	 * inside iportal_config.php file.
	 * 
	 * @return Array a list of roles that a portal user can have
	 */
	function getRolesList() {
		global $iportal_config;
			
		if(!$iportal_config) {
 			require_once('iportal_config.php');
			if(file_exists('iportal_config_override.php')){require_once('iportal_config_override.php');}
		}

 		$portal_user_roles = ACLRole::getUserRoles($iportal_config['default_user_id'], false);
 		//TK Begin - Check for portal user_id
 		if (!count($portal_user_roles)) {
 			global $mod_strings, $current_user;
 			if ($current_user->is_admin) {
 				$message = $mod_strings['PORTAL_ID_NOT_SET_ADMIN'];
 			}
 			else {
 				$message = $mod_strings['PORTAL_ID_NOT_SET_USER'];
 			}
 			displayAdminError($mod_strings['PORTAL_ID_NOT_SET'].$message);
 		}
		//TK End - Check for portal user_id
 		$this->roles_list = array('' => '');
 		foreach($portal_user_roles as $role) {
 			$this->roles_list[$role->id] = $role->name;
 		}
 		
 		return $this->roles_list;
 	}
 	
 	/**
 	 * In lg_PortalUser bean, we store only the assigned role id. 
 	 * So we need this method to retrieve the name of the assigned role.
 	 * 
 	 * @return STRING the role name or an empty string in case there's no Role with the current id
 	 */
 	function getRoleName() {
 		if(empty($this->roles_list)) $this->getRolesList();
 		if(isset($this->roles_list[$this->role])) {
 			return $this->roles_list[$this->role];
 		} else {
 			return '';
 		}
 	}
	
	/**
 	 * @return OBJECT the Contact related with this Portal User
 	 */
	function getContact() {
		if( !empty($this->contact_id) ) {
			include_once('modules/Contacts/Contact.php');
			$contact = new Contact();			
			$contact->disable_row_level_security = true;
			$contact->retrieve($this->contact_id);
			
			return $contact;
		}
		
		return false;
	}	
	
	function changePassword($username, $send_alert = false) {
		$portal_users = array();
		
		$result = $this->db->query("SELECT id, username FROM lg_portaluser WHERE username = '$username'");

		while( $row = $this->db->fetchByAssoc($result) ) {
			$portal_users[] = $row;
		}
		
		if( count($portal_users) == 1 ) {
			$this->disable_row_level_security = true;
			$this->retrieve($portal_users[0]['id']);
			
			$password = $this->createPassword(8, true, true, true, true);
			$this->password = $password;

			$this->save();
			
			if($send_alert) {
				$this->sendPassword($password);
			}

			return 'sucess';			
		} else {
			return 'fail';
		}
	}
	
	function sendPassword($password) {
		global $iportal_config;
	
		require('modules/lg_PortalUser/email_templates.php');

		$subject = 'iPortal password request';
		
		$body = $email_templates[$iportal_config['default_language']]['new_password'];
		
		$contact = $this->getContact();
		$contact_name = trim($contact->first_name . ' ' . $contact->last_name);
		
		$body = str_replace("[PASSWORD]", $password, $body);
		$body = str_replace("[CONTACT_NAME]", $contact_name, $body);
		
		if( !empty($contact->email1) ) {
			$to['name'] = $contact_name;
			$to['email'] = $contact->email1;
			$this->sendEmail($subject, $body, $to);
		}
	}
	
	function createPassword($tamanho, $maiuscula, $minuscula, $numeros, $codigos) {
		$maius = "ABCDEFGHIJKLMNOPQRSTUWXYZ";
		$minus = "abcdefghijklmnopqrstuwxyz";
		$numer = "0123456789";
		// $codig = '!@#$%&*()-+.,;?{[}]^><:|';
		$codig = '!@#$%*-.';
	 
		$base = '';
		$base .= ($maiuscula) ? $maius : '';
		$base .= ($minuscula) ? $minus : '';
		$base .= ($numeros) ? $numer : '';
		$base .= ($codigos) ? $codig : '';
	 
		srand((float) microtime() * 10000000);
		$senha = '';
		for ($i = 0; $i < $tamanho; $i++) {
			$senha .= substr($base, rand(0, strlen($base)-1), 1);
		}
		return $senha;
	}
	
	function sendEmail($subject, $body, $to, $from = NULL) {
		global $beanFiles;
		
		require_once($beanFiles['Administration']);
		require_once($beanFiles['Email']);

		$email = new Email();
		$admin = new Administration();
		$admin->retrieveSettings();
		
		if( empty($from) ) {
			$from = array();
			$from['email'] = !empty($admin->settings['notify_fromaddress']) ? $admin->settings['notify_fromaddress'] : 'iportal@iportal.com';
			$from['name'] = !empty($admin->settings['notify_fromname']) ? $admin->settings['notify_fromname'] : 'iPortal';
		}
		
		$email->cc_addrs_arr = array();
		$email->bcc_addrs_arr = array();
		$email->saved_attachments = array();	
		$email->from_addr = $from['email'];
		$email->from_name = $from['name'];
		
		$email->to_addrs.= $to['name'] . '<' . $to['email'] . '>' . ';';
		//$email->to_addrs_ids.= $to_id . ';';
		$email->to_addrs_names.= $to['name'] . ';';
		$email->to_addrs_emails.= $to['email'] . ';';
		$email->to_addrs_arr[] = array('email' => $to['email']);
		
		$email->description_html = wordwrap($body, 900);
		$email->name = from_html(($subject));

		$email->send();

		return true;
	}
}
?>