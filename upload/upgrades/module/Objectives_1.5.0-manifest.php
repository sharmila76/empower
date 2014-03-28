	<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
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
		'6.2.*',
	  ),
	  'acceptable_sugar_flavors' =>
	  array(
	  	'CE'
	  ),
	  'readme'=>'',
	  'key'=>'OBJ',
	  'author' => 'System In Motion',
	  'description' => 'Manage your objectives',
	  'icon' => '',
	  'is_uninstallable' => true,
	  'name' => 'Objectives',
	  'published_date' => '2011-7-20 09:30:00',
	  'type' => 'module',
	  'version' => '1.5.0',
	  'remove_tables' => 'prompt',
	  );

$installdefs = array (
  'id' => 'Objectives',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'OBJ_Conditions',
      'class' => 'OBJ_Conditions',
      'path' => 'modules/OBJ_Conditions/OBJ_Conditions.php',
      'tab' => false,
    ),
    1 => 
    array (
      'module' => 'OBJ_Indicators',
      'class' => 'OBJ_Indicators',
      'path' => 'modules/OBJ_Indicators/OBJ_Indicators.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'OBJ_Objectives',
      'class' => 'OBJ_Objectives',
      'path' => 'modules/OBJ_Objectives/OBJ_Objectives.php',
      'tab' => true,
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/modules/Charts/Dashlets/PipelineByObjectivesDashlet',
      'to' => 'custom/modules/Charts/Dashlets/PipelineByObjectivesDashlet',
    ),
    1 => 
    array (
      'from' => '<basepath>/modules/OBJ_Indicators',
      'to' => 'modules/OBJ_Indicators',
    ),
    2 => 
    array (
      'from' => '<basepath>/modules/OBJ_Conditions',
      'to' => 'modules/OBJ_Conditions',
    ),
    3 => 
    array (
      'from' => '<basepath>/modules/OBJ_Objectives',
      'to' => 'modules/OBJ_Objectives',
    ),
	4 =>
	array (
      'from' => '<basepath>/include/SugarCharts/Jit/js/Jit/jit.js',
      'to' => 'jssource/src_files/include/SugarCharts/Jit/js/Jit/jit.js',
	),
	5 =>
	array (
      'from' => '<basepath>/include/SugarCharts/Jit/js/sugarCharts.js',
      'to' => 'jssource/src_files/include/SugarCharts/Jit/js/sugarCharts.js',
	),
	6 =>
	array (
      'from' => '<basepath>/include/SugarCharts/Jit/tpls/objectiveChart.tpl',
      'to' => 'custom/modules/Charts/Dashlets/PipelineByObjectivesDashlet/objectiveChart.tpl',
	),
	7 =>
	array (
      'from' => '<basepath>/include/SugarCharts/Jit/css/base.css',
      'to' => 'include/SugarCharts/Jit/css/base.css',
	),
	8 =>
	array (
      'from' => '<basepath>/include/tabConfig.php',
      'to' => 'custom/include/tabConfig.php',
	),
	9 =>
	array (
      'from' => '<basepath>/relationships/relationships/obj_objectives_usersMetaData.php',
      'to' => 'custom/metadata/obj_objectives_usersMetaData.php',
	),
	10 =>
	array (
      'from' => '<basepath>/TableDictionary',
      'to' => 'custom/Extension/application/Ext/TableDictionary',
	),
	
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
);