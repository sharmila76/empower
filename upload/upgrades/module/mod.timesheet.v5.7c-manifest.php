<?php
// manifest file for information regarding application of new code
$manifest = array(
  'acceptable_sugar_versions' => array (
    'exact_matches' => array(),
    'regex_matches' => array ('6\\.0\\.*', '6\\.1\\.*', '6\\.2\\.*', '6\\.3\\.*', '6\\.4\\.*', '6\\.5\\.*', '6\\.6\\.*', '6\\.7\\.*')
  ),
  'acceptable_sugar_flavors' => array(),

  // name of new code
  'name' => 'SuperTimesheet',

  // description of new code
  'description' => 'This module manages Timesheets',

  // author of new code
  'author' => 'Farkhad Rakhimzhanov (farkhad@gmail.com)',

  // date published
  'published_date' => "2013-08-28",

  // version of code
  'version' => '5.7c',

  // type of code (valid choices are: full, langpack, module, patch, theme )
  'type' => 'module',

  // icon for displaying in UI (path to graphic contained within zip package)
  'icon' => '',

  // uninstallable
  "is_uninstallable" => 'Yes',     // 'No'

  'remove_tables' => 'prompt',
);

$installdefs = array(
  'id'=> 'timesheet',
  'copy' => array(
    array('from'=> '<basepath>/modules/Timesheet',
          'to'=> 'modules/Timesheet')
  ),
  'language'=> array(
    array('from'=> '<basepath>/application/app_strings.php',
          'to_module'=> 'application',
          'language'=>'en_us'),
    array('from'=> '<basepath>/application/de_DE.app_strings.php',
          'to_module'=> 'application',
          'language'=>'de_DE'),
    array('from'=>'<basepath>/subpanel/en_us.lang.php',
          'to_module' => 'Cases',
          'language' => 'en_us'),
    array('from'=>'<basepath>/subpanel/en_us.lang.php',
          'to_module' => 'Project',
          'language' => 'en_us'),
    array('from'=>'<basepath>/subpanel/en_us.lang.php',
          'to_module' => 'ProjectTask',
          'language' => 'en_us'),
    array('from'=>'<basepath>/subpanel/de_DE.lang.php',
          'to_module' => 'Cases',
          'language' => 'de_DE'),
    array('from'=>'<basepath>/subpanel/de_DE.lang.php',
          'to_module' => 'Project',
          'language' => 'de_DE'),
    array('from'=>'<basepath>/subpanel/de_DE.lang.php',
          'to_module' => 'ProjectTask',
          'language' => 'de_DE')
  ),
  'beans'=> array(
    array('module'=> 'Timesheet',
          'class'=> 'Timesheet',
          'path'=> 'modules/Timesheet/Timesheet.php',
          'tab'=> true),
    array('module' => 'TimesheetTimer',
          'class' => 'TimesheetTimer',
          'path' => 'modules/Timesheet/TimesheetTimer.php',
          'tab' => false)
  ),
  'relationships' => array(
    array('module' => 'Cases',
          'meta_data'=>'<basepath>/relationships/cases_timesheetMetaData.php',
          'module_vardefs'=>'<basepath>/vardefs/cases_vardefs.php',
          'module_layoutdefs'=>'<basepath>/layoutdefs/caseslayout_defs.php'),
    array('module' => 'Project',
          'meta_data'=>'<basepath>/relationships/project_timesheetMetaData.php',
          'module_vardefs'=>'<basepath>/vardefs/project_vardefs.php',
          'module_layoutdefs'=>'<basepath>/layoutdefs/projectlayout_defs.php'),
    array('module' => 'ProjectTask',
          'meta_data'=>'<basepath>/relationships/projecttask_timesheetMetaData.php',
          'module_vardefs'=>'<basepath>/vardefs/projecttask_vardefs.php',
          'module_layoutdefs'=>'<basepath>/layoutdefs/projecttasklayout_defs.php')
  ),
  'logic_hooks' => array(
    array('module' => 'Cases',
          'hook' => 'before_save',
          'order' => 99,
          'description' => 'timesheet logic hook for case',
          'file' => 'modules/Timesheet/countTotalHook.php',
          'class' => 'countTotalHook',
          'function' => 'before_save'),
    array('module' => 'Project',
          'hook' => 'before_save',
          'order' => 99,
          'description' => 'timesheet logic hook for project',
          'file' => 'modules/Timesheet/countTotalHook.php',
          'class' => 'countTotalHook',
          'function' => 'before_save'),
    array('module' => 'ProjectTask',
          'hook' => 'before_save',
          'order' => 99,
          'description' => 'timesheet logic hook for projecttask',
          'file' => 'modules/Timesheet/countTotalHook.php',
          'class' => 'countTotalHook',
          'function' => 'before_save'),
    array('module' => 'Timesheet',
          'hook' => 'before_save',
          'order' => 99,
          'description' => 'timesheet logic hook',
          'file' => 'modules/Timesheet/countTotalHook.php',
          'class' => 'countTotalHook',
          'function' => 'doCount'),
    array('module' => 'Timesheet',
          'hook' => 'before_save',
          'order' => 99,
          'description' => 'timesheet logic hook',
          'file' => 'modules/Timesheet/logicHook.php',
          'class' => 'TimesheetLogicHook',
          'function' => 'before_save'),
    array('module' => 'Timesheet',
          'hook' => 'before_delete',
          'order' => 99,
          'description' => 'timesheet logic hook',
          'file' => 'modules/Timesheet/countTotalHook.php',
          'class' => 'countTotalHook',
          'function' => 'doCountOnDelete')
  ),
);
