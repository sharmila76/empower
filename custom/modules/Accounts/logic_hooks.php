<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function
// Added by Sharmila. Under Accounts DetailView, there will be a Inside view. 
// For removing that field, commented below lines. 
//$hook_array['after_ui_frame'] = Array(); 
//$hook_array['after_ui_frame'][] = Array(1, 'Accounts InsideView frame', 'modules/Connectors/connectors/sources/ext/rest/insideview/InsideViewLogicHook.php','InsideViewLogicHook', 'showFrame'); 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'INSERT_INTO_PM_ENTRY_TABLE', 'modules/PM_ProcessManager/insertIntoPmEntryTable.php','insertIntoPmEntryTable', 'setPmEntryTable'); 



?>