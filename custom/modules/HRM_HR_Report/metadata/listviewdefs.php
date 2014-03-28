<?php
$module_name = 'HRM_HR_Report';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'REP_MOIS' => 
  array (
    'width' => '3%',
    'label' => 'LBL_REP_MOIS',
    'default' => true,
  ),
  'REP_YEAR' => 
  array (
    'width' => '3%',
    'label' => 'LBL_REP_YEAR',
    'default' => true,
  ),
  'HRR_INCOME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HRR_INCOME',
    'default' => true,
  ),
  'HRR_INC_YEAR' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HRR_INC_YEAR',
    'default' => true,
  ),
  'HRR_SOC_YEAR' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HRR_SOC_YEAR',
    'default' => true,
  ),
  'HRR_INC_TOT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HRR_INC_TOT',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => false,
  ),
  'HRM_EMPLOYEES_HRM_HR_REPORT_NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_EMPLOYEE',
    'default' => false,
    'link' => true,
    'module' => 'HRM_Employees',
    'id' => 'HRM_EMPLOYE_EMPLOYEES_IDA',
  ),
);
?>
<?php
/*
   This limits the ListView based on teams - part of the CE Teams module
   It is a template which is added to the end of modules/<module>/metadata/listviewdefs.php
   by the custom logic whenever it is needed
   This is needed because there is no logic hook that can modify the listview query
*/
require_once "modules/team/teams_logic.php";
$tmp = new teams_logic();
$tmp->limit_list_access($this, 'before_listview');
?>
