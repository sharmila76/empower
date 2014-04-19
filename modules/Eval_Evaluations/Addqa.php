<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

echo '<h1>Setting up question and answers</h1></br>';

$subject_name = $_REQUEST['subject_name'];
$subject = "SELECT subject_code FROM subject_table WHERE subject_description='$subject_name'";
$res = $GLOBALS['db']->query($subject)->fetch_row();
echo $res[0];

$question_type = $_REQUEST['question_type'];
$number_of_answers = $_REQUEST['number_of_answers'];


$subject = "SELECT * FROM subject_table";
$res = $GLOBALS['db']->query($subject);
while ($row = $GLOBALS['db']->fetchByAssoc($res)) {
  $subject_list[] = $row;
}

$this->ss->assign('SUBJECT_LIST', $subject_list);

$this->ss->display($this->getCustomFilePathIfExists('modules/Eval_Evaluations/Addqa.html'));