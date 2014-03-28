<?php /* Smarty version 2.6.11, created on 2014-03-26 07:16:38
         compiled from modules/Emails/templates/bulkmail.tpl */ ?>

<form method="POST" action="index.php">
    <input type="hidden" name="module" value="Emails">
    <input type="hidden" name="action" value="sendbulkmail">

    <?php if ($this->_tpl_vars['USERS_LIST']): ?> 
        <table id="send-mail-table">
            <?php $_from = $this->_tpl_vars['USERS_LIST']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
                <tr>
                    <td colspan="2"><input type="checkbox" name="users[]" value=<?php echo $this->_tpl_vars['list']['id']; ?>
><?php echo $this->_tpl_vars['list']['user_name']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['list']['last_name']; ?>
</td>
                </tr>            
            <?php endforeach; endif; unset($_from); ?>
        </table>
        <table>
            <tr>
                <td>
                    <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span><b><?php echo $this->_tpl_vars['MOD']['LBL_BULKMAIL_SUBJECT']; ?>
</b>
                </td>
                <td>
                    <input type="text" name="subject">
                </td>
            </tr>
            <tr>
                <td>
                    <b><?php echo $this->_tpl_vars['MOD']['LBL_BULKMAIL_TEXT']; ?>
</b>
                </td>
                <td>
                    <textarea rows="4" cols="30" name="send_mail_text"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="send_mail" value="Send Email">
                </td>
            </tr> 
        </table>
    <?php endif; ?>
</form>