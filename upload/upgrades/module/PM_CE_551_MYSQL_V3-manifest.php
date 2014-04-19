	<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2007 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

	$manifest = array (
		 'acceptable_sugar_versions' => 
		  array (
	     		0 => "5.5.0", 
		  ),
		  'acceptable_sugar_flavors' =>
		  array(
		  	'CE', //'PRO','ENT'
		  ),
		  'readme'=>'Process Manager 5.5.0 for SugarCRM Community Edition. Please visit our website at www.sierracrm.com for updated news and information regarding Process Manager.',
		  'key'=>'PM',
		  'author' => 'Bill Convis',
		  'description' => 'Process Manager 5.5 CE',
		  'icon' => '',
		  'is_uninstallable' => true,
		  'name' => 'Process Manager',
		  'published_date' => '2010-01-01 01:23:44',
		  'type' => 'module',
		  'version' => 'PMMYSQL55CE',
		  'remove_tables' => 'prompt',
		  );
$installdefs = array (
  'id' => 'SierraCRM',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'PM_ProcessManager',
      'class' => 'PM_ProcessManager',
      'path' => 'modules/PM_ProcessManager/PM_ProcessManager.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'PM_ProcessManagerStage',
      'class' => 'PM_ProcessManagerStage',
      'path' => 'modules/PM_ProcessManagerStage/PM_ProcessManagerStage.php',
      'tab' => false,
    ),
    2 => 
    array (
      'module' => 'PM_ProcessManagerStageTask',
      'class' => 'PM_ProcessManagerStageTask',
      'path' => 'modules/PM_ProcessManagerStageTask/PM_ProcessManagerStageTask.php',
      'tab' => false,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/layoutdefs/PM_ProcessManagerStage.php',
      'to_module' => 'PM_ProcessManagerStage',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/layoutdefs/PM_ProcessManager.php',
      'to_module' => 'PM_ProcessManager',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/layoutdefs/PM_ProcessManagerStageTask.php',
      'to_module' => 'PM_ProcessManagerStageTask',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/layoutdefs/PM_ProcessManagerStage.php',
      'to_module' => 'PM_ProcessManagerStage',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'module' => 'PM_ProcessManagerStage',
      'module_vardefs' => '<basepath>/SugarModules/vardefs/PM_ProcessManagerStage.php',
      'meta_data' => '<basepath>/SugarModules/relationships/PM_ProcessManager_pm_processmanagerstageMetaData.php',
    ),
    1 => 
    array (
      'module' => 'PM_ProcessManagerStageTask',
      'module_vardefs' => '<basepath>/SugarModules/vardefs/PM_ProcessManagerStageTask.php',
      'meta_data' => '<basepath>/SugarModules/relationships/PM_ProcessManagerStage_pm_processmanagerstagetaskMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/PM_ProcessManager',
      'to' => 'modules/PM_ProcessManager',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/PM_ProcessManagerStage',
      'to' => 'modules/PM_ProcessManagerStage',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/PM_ProcessManagerStageTask',
      'to' => 'modules/PM_ProcessManagerStageTask',
    ),
     3 => 
    array (
      'from' => '<basepath>/include/SugarFields/Fields/Enum',
      'to' => 'include/SugarFields/Fields/Enum',
    ),

  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/vardefs/PM_ProcessManager.php',
      'to_module' => 'PM_ProcessManager',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/vardefs/PM_ProcessManagerStage.php',
      'to_module' => 'PM_ProcessManagerStage',
    ),
   
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
    
'post_execute'=>array(
	0 => '<basepath>/LoadPMTables.php',

),

);