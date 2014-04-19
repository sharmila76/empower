<?php

if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

//$this->ss->assign('CALENDAR_DATEFORMAT', $timedate->get_cal_date_format());
if (isset($_POST['add_package'])) {
  $name = mysql_real_escape_string(htmlspecialchars($_POST['package_name']));
  $code = mysql_real_escape_string(htmlspecialchars($_POST['package_code']));
  if ($name == '' || $code == '') {
    echo 'Please enter the Package Name!';
  } else {
    $q = "INSERT packagemaster SET PackageCode='$code', PackageName='$name',  IsActive=1";
    $res = $GLOBALS['db']->query($q);
    if ($res) {
      echo "Record saved successfully";
    }
  }
}

//if(ACLController::checkAccess('pa123_package', 'edit', true))$module_menu[]=Array("index.php?module=pa123_package&action=EditView&return_module=pa123_package&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'],"Createpa123_package", 'pa123_package');
//if(ACLController::checkAccess('pa123_package', 'list', true))$module_menu[]=Array("index.php?module=pa123_package&action=index&return_module=pa123_package&return_action=DetailView", $mod_strings['LNK_LIST'],"pa123_package", 'pa123_package');
//if(ACLController::checkAccess('pa123_package', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=pa123_package&return_module=pa123_package&return_action=index", $app_strings['LBL_IMPORT'],"Import", 'pa123_package');
$this->ss->display($this->getCustomFilePathIfExists('modules/Addpackage/Addpackage.html'));
?>
