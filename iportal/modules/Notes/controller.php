<?php
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
 * by SugarCRM are Copyright (C) 2004-2009 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
/*
 * Created on Mar 23, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 require_once('iportal/include/MVC/Controller/IportalController.php');
  
  
 class NotesController extends IportalController
{
	
	function action_save(){
		require_once('include/upload_file.php');
		$GLOBALS['log']->debug('PERFORMING NOTES SAVE');
		$upload_file = new UploadFile('uploadfile');
		$do_final_move = 0;
		if (isset($_FILES['uploadfile']) && $upload_file->confirm_upload())
		{
       		if (!empty($this->bean->id) && !empty($_REQUEST['old_filename']) )
        	{
       	         $upload_file->unlink_file($this->bean->id,$_REQUEST['old_filename']);
       	 	}

	        $this->bean->filename = $upload_file->get_stored_file_name();
	        $this->bean->file_mime_type = $upload_file->mime_type;

       	 $do_final_move = 1;
		}
		else if ( isset( $_REQUEST['old_filename']))
		{
	       	 $this->bean->filename = $_REQUEST['old_filename'];
		}
		$this->bean->save();
		if ($do_final_move)
		{
       		 $upload_file->final_move($this->bean->id);
		}
		else if ( ! empty($_REQUEST['old_id']))
		{
       	 	$upload_file->duplicate_file($_REQUEST['old_id'], $this->bean->id, $this->bean->filename);
		}
	}
	
	function action_editview(){
		$this->view = 'edit';
		$GLOBALS['view'] = $this->view;
		if(!empty($_REQUEST['deleteAttachment'])){
			ob_clean();
			echo $this->bean->deleteAttachment($_REQUEST['isDuplicate']) ? 'true' : 'false';
			sugar_cleanup(true);
		}

	}
	
}
?>
