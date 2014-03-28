<?php

if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

//require_once('modules/Users/Forms.php');
//require_once('modules/Configurator/Configurator.php');

class ViewActivity extends SugarView {
  /**
   * Constructor.
   */
  //public function __construct()
//	{
//		parent::SugarView();
//
  //      $this->options['show_header'] = false;
  //    $this->options['show_footer'] = false;
  //  $this->options['show_javascript'] = false;
  //}

  /**
   * @see SugarView::display()
   */
  public function display() {
    global $timedate;

    $args = array();
    $this->ss->assign('CALENDAR_DATEFORMAT', $timedate->get_cal_date_format());
    $this->ss->assign("USER_FILTER", get_select_options_with_id(get_user_array(true), $user_id));
    $user_id = NULL;
    if (!empty($_REQUEST['user_id'])) {
      $user_id = $_REQUEST['user_id'];
    }
    $date_start = NULL;
    if (!empty($_REQUEST['start_date'])) {
      $date_start = $_REQUEST['start_date'];
    }
    $date_end = NULL;
    if (!empty($_REQUEST['end_date'])) {
      $date_end = $_REQUEST['end_date'];
    }
    if ($user_id) {
      // return result
      $args['user_id'] = $user_id;
      $args['start_date'] = $date_start;
      $args['end_date'] = $date_end;
      $this->ss->assign('USERS_ACTIVITY', $this->get_users_activity($args));
    }
    $this->ss->display($this->getCustomFilePathIfExists('modules/UsersActivity/tpls/activity.tpl'));
  }

  function get_users_activity($args) {
    global $current_user, $timedate;
    $args['start_date'] = $timedate->to_db_date($args['start_date'], false);
    $args['end_date'] = $timedate->to_db_date($args['end_date'], false);
    
    $q = "SELECT t.item_id, t.item_summary, t.module_name, t.action, t.date_modified, u.user_name FROM tracker t JOIN users u ON u.id='".$args['user_id']."' WHERE t.deleted = 0 AND (t.user_id = '" . $args['user_id'] . "' )";
    
    $date_where = '';
    if (!empty($args['start_date']) && !empty($args['end_date'])) {
      $date_where .= "t.date_modified BETWEEN CAST('" . $args['start_date'] . "' AS DATE) AND CAST('" . $args['end_date'] . "' AS DATE)";
    } else if (!empty($args['start_date'])) {
      $date_where .= "CAST('" . $args['start_date'] . "' AS DATE) BETWEEN CAST('" . $args['start_date'] . "' AS DATE) AND t.date_modified";
    } else if (!empty($args['end_date'])) {
      $date_where .= "t.date_modified BETWEEN t.date_modified AND CAST ('" . $args['end_date'] . "' AS DATE)";
    }

    if ($date_where != '') {
      $q .= " AND ($date_where) ";
    }    

    $entries = array();
    $res = $GLOBALS['db']->query($q);
    while ($row = $GLOBALS['db']->fetchByAssoc($res)) {
      $entries[] = $row;
    }
    if($entries) {
      return $entries;
    }
    else {
      return FALSE;
    }  
  }
}
