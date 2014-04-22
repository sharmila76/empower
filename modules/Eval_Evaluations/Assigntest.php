<?php

if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

echo '<h1>Testing</h1>';
$subject = "SELECT * FROM subject_table";
$res = $GLOBALS['db']->query($subject);
while ($row = $GLOBALS['db']->fetchByAssoc($res)) {
  $subject_list[] = $row;
}
$this->ss->assign('SUBJECT_LIST', $subject_list);


$this->ss->display($this->getCustomFilePathIfExists('modules/Eval_Evaluations/Assigntest.html'));

