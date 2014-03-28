<?php
$viewdefs ['Bugs'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="account_id" value="{$smarty.request.account_id}">',
          1 => '<input type="hidden" name="contact_id" value="{$smarty.request.contact_id}">',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_bug_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bug_number',
            'type' => 'readonly',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'size' => 60,
              'required' => true,
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'priority',
            'comment' => 'An indication of the priorty of the issue',
            'label' => 'LBL_PRIORITY',
          ),
          1 => 
          array (
            'name' => 'type',
            'comment' => 'The type of issue (ex: issue, feature)',
            'label' => 'LBL_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'source',
            'comment' => 'An indicator of how the bug was entered (ex: via web, email, etc.)',
            'label' => 'LBL_SOURCE',
          ),
          1 => 
          array (
            'name' => 'status',
            'comment' => 'The status of the issue',
            'label' => 'LBL_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'product_category',
            'comment' => 'Where the bug was discovered (ex: Accounts, Contacts, Leads)',
            'label' => 'LBL_PRODUCT_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'resolution',
            'comment' => 'An indication of how the issue was resolved',
            'label' => 'LBL_RESOLUTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'found_in_release',
            'comment' => 'The software or service release that manifested the bug',
            'studio' => 
            array (
              'fields' => 'false',
              'listview' => false,
              'wirelesslistview' => false,
            ),
            'label' => 'LBL_FOUND_IN_RELEASE',
          ),
          1 => 
          array (
            'name' => 'fixed_in_release',
            'comment' => 'The software or service release that corrected the bug',
            'studio' => 
            array (
              'fields' => 'false',
              'listview' => false,
              'wirelesslistview' => false,
            ),
            'label' => 'LBL_FIXED_IN_RELEASE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'show_in_portal_c',
            'label' => 'LBL_SHOW_IN_PORTAL',
          ),
          1 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'work_log',
            'nl2br' => true,
          ),
          1 => '',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'label' => 'LBL_TEAMS',
          ),
        ),
      ),
    ),
  ),
);
?>
