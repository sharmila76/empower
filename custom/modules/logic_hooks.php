<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_retrieve'] = Array(); 
$hook_array['after_retrieve'][] = Array(1, 'Teams CE Extension', 'modules/team/teams_logic.php','teams_logic', 'check_team_access'); 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Teams CE Extension', 'modules/team/teams_logic.php','teams_logic', 'set_default_team_bean'); 
$hook_array['after_ui_footer'] = Array(); 



?>