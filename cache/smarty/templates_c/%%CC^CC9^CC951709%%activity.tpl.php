<?php /* Smarty version 2.6.11, created on 2014-03-26 07:00:17
         compiled from modules/UsersActivity/tpls/activity.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimage', 'modules/UsersActivity/tpls/activity.tpl', 12, false),)), $this); ?>

<form method="POST" action="index.php">
    <input type="hidden" name="module" value="UsersActivity">
    <input type="hidden" name="action" value="activity">

    <table>
        <tr>
            <td>
                <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span><b><?php echo $this->_tpl_vars['MOD']['LBL_EMPLOYEE']; ?>
</b><select name="user_id"><?php echo $this->_tpl_vars['USER_FILTER']; ?>
</select>
            </td>
            <td><span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span><slot><?php echo $this->_tpl_vars['MOD']['LBL_DATE_START']; ?>
</slot></td>
        <td><slot><input name='start_date' onblur="parseDate(this, '<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
');" id='jscal_field_start' type="text" tabindex='2' size='11' maxlength='10' value="<?php echo $this->_tpl_vars['START_DATE']; ?>
"> <?php echo smarty_function_sugar_getimage(array('name' => 'jscalendar','ext' => ".gif",'alt' => $this->_tpl_vars['APP']['LBL_ENTER_DATE'],'other_attributes' => 'align="absmiddle" id="jscal_trigger_start" '), $this);?>
</slot></td>
        <td><span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span><slot><?php echo $this->_tpl_vars['MOD']['LBL_DATE_END']; ?>
</slot></td>
        <td><slot><input name='end_date' onblur="parseDate(this, '<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
');" id='jscal_field_end' type="text" tabindex='2' size='11' maxlength='10' value="<?php echo $this->_tpl_vars['END_DATE']; ?>
"> <?php echo smarty_function_sugar_getimage(array('name' => 'jscalendar','ext' => ".gif",'alt' => $this->_tpl_vars['APP']['LBL_ENTER_DATE'],'other_attributes' => 'align="absmiddle" id="jscal_trigger_end" '), $this);?>
</slot></td>
        <td><input type="submit" value="Submit" /></td>	
        </tr>
    </table>
    <table>
        <?php if ($this->_tpl_vars['USERS_ACTIVITY']): ?>
            <?php $_from = $this->_tpl_vars['USERS_ACTIVITY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                <tr><td><b><?php echo $this->_tpl_vars['value']['user_name']; ?>
</b> has viewed <a href="index.php?module=<?php echo $this->_tpl_vars['value']['module_name']; ?>
&action=<?php echo $this->_tpl_vars['value']['action']; ?>
&record=<?php echo $this->_tpl_vars['value']['item_id']; ?>
"><?php echo $this->_tpl_vars['value']['item_summary']; ?>
</a> on <?php echo $this->_tpl_vars['value']['date_modified']; ?>
</br></td></tr>
            <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
            <p>No results found</p>
        <?php endif; ?>
    </table>

    <p><?php echo $this->_tpl_vars['USER_ID']; ?>
</p>
</form>

<script>
    Calendar.setup(<?php echo '{'; ?>

        inputField: "jscal_field_start", ifFormat: "<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
", showsTime: false, button: "jscal_trigger_start", singleClick: true, step: 1, weekNumbers: false
    <?php echo '}'; ?>
);
        Calendar.setup(<?php echo '{'; ?>

            inputField: "jscal_field_end", ifFormat: "<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
", showsTime: false, button: "jscal_trigger_end", singleClick: true, step: 1, weekNumbers: false
    <?php echo '}'; ?>
);
</script>