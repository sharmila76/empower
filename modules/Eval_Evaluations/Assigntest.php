<?php

if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

echo '<h1>Testing';

$subject = "SELECT * FROM subject_table";
$res = $GLOBALS['db']->query($subject);
while ($row = $GLOBALS['db']->fetchByAssoc($res)) {
  $subject_list[] = $row;
}

$this->ss->assign('SUBJECT_LIST', $subject_list);

if (isset($_REQUEST['candidate_name'])) {
  $candidate_name = $_REQUEST['candidate_name'];
  $this->ss->assign('candidate_name', $candidate_name);
}

$subject_name = $_REQUEST['subject_name'];
$this->ss->assign('subject_name', $subject_name);

$subject = "SELECT subject_code FROM subject_table WHERE subject_description='$subject_name'";
$res = $GLOBALS['db']->query($subject)->fetch_row();
$subject_code = $res[0];

if (isset($_REQUEST['number_of_questions'])) {
  $number_of_questions_to_select = $_REQUEST['number_of_questions'];
  $this->ss->assign('questions', $number_of_questions_to_select);
}

//Select random questions.
$select = "SELECT `question_code`, `question_name`, `answer1`, `answer2`, `answer3`, `answer4`, `correct_answer` FROM `question_and_answer` WHERE `subject_code` = $subject_code ORDER BY RAND( ) LIMIT $number_of_questions_to_select";
$result = $GLOBALS['db']->query($select);
while ($row_list = $GLOBALS['db']->fetchByAssoc($result)) {
  $question_list[] = $row_list;
}

//print_r($question_list);
//Test section.
if (isset($_POST['submit_test'])) {
  $count = count($_POST['question']);
  foreach ($_POST['question'] as $question_code) {
    if ($_POST[$question_code]) {
      $answered_choices = implode(',', $_POST[$question_code]);
    } else {
      $answered_choices = implode(array('No'));
    }
    $insert = "INSERT test_result SET question_code='$question_code', answered_choices='$answered_choices'";
    $insert_result = $GLOBALS['db']->query($insert);
  }
}

$this->ss->assign('questions_list', $question_list);

$this->ss->display($this->getCustomFilePathIfExists('modules/Eval_Evaluations/Assigntest.html'));

//array([question] => Array ( [0] => 2 [1] => 1 ), 
//[correct_answer] => Array ( [0] => programming,correct [1] => programming,correct ),
//[answer1] => Array ( [0] => programming [1] => programming ), 
//[answer2] => Array ( [0] => answer2 [1] => debugger ), 
//[answer3] => Array ( [0] => script [1] => script ), 
//[answer4] => Array ( [0] => correct [1] => correct ), )