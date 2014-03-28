<?php /* Smarty version 2.6.11, created on 2014-03-26 11:49:37
         compiled from modules/UsersActivity/tpls/package.tpl */ ?>
<form method="GET" action="index.php">
    <input type="hidden" name="module" value="UsersActivity">
    <input type="hidden" name="action" value="package">
    <table>
        <tr>
            <th>Module Name</th><th>Module amount</th>
        </tr>
        <?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module_name']):
?>
            <tr><td><?php echo $this->_tpl_vars['module_name']['module_name']; ?>
</td>
                <td><input type="text" value=<?php echo $this->_tpl_vars['module_name']['amount']; ?>
 /></td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr><td><input type="submit" value="Submit Amount" /></td></tr>
    </table>
</form>