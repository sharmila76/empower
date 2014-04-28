<?php /* Smarty version 2.6.11, created on 2014-04-25 10:06:40
         compiled from modules/let_Chat/settings.tpl */ ?>

<form id="ConfigureSettings" name="ConfigureSettings" method="POST"	action="index.php?module=let_Chat&action=settings&process=true">

<?php if (! empty ( $this->_tpl_vars['error'] )): ?>
<span class='error'><?php echo $this->_tpl_vars['error']; ?>
</span>
<br/><br/>
<?php endif; ?>

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
<tr>
	<td>
		<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
"
			accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
"
			class="button primary"
			type="submit"
			name="save"
			onclick="return verify_data('ConfigureSettings');"
			value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " >
		&nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href='index.php?module=<?php echo $this->_tpl_vars['return_module']; ?>
&action=<?php echo $this->_tpl_vars['return_action']; ?>
'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " > </td>
	</tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view" style="margin-top: 5px;">
	<tr>
		<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_DEFAULT_CURRENCY']; ?>
</h4></th>
	</tr>
    <tr>
		<td  scope="row" width="120"><?php echo $this->_tpl_vars['MOD']['LBL_DISABLE_CHAT']; ?>
: </td>
		    <?php if ($this->_tpl_vars['settings']['disable_chat'] == 1): ?>
			<?php $this->assign('disable_chat_checked', 'CHECKED'); ?>
		    <?php else: ?>
			<?php $this->assign('disable_chat_checked', ''); ?>
		    <?php endif; ?>
		<td width="25%"><input type='hidden' name='disable_chat' value='0'><input name='disable_chat' type="checkbox" value="1" <?php echo $this->_tpl_vars['disable_chat_checked']; ?>
>
        </td>
        <td>&nbsp</td>
        <td>&nbsp</td>

	</tr>

	<tr>
		<td scope="row" width="120"><?php echo $this->_tpl_vars['MOD']['LBL_SKIN']; ?>
: </td>
		<td width="25%">
		    <select id="skin" name="skin">
				<?php echo $this->_tpl_vars['SKIN_LIST']; ?>

			</select>
        </td>
        <td>&nbsp</td>
        <td>&nbsp</td>

	</tr>
	
	<!-- letrium v -->
	<tr>
		<td scope="row" width="120"><?php echo $this->_tpl_vars['MOD']['LBL_DISPLAY_NAME']; ?>
: </td>
		<td width="25%">
		    <select id="display_name" name="display_name">
				<?php echo $this->_tpl_vars['DISPLAY_NAME_LIST']; ?>

			</select>
        </td>
        <td>&nbsp</td>
        <td>&nbsp</td>

	</tr>
	
	<tr>
	<td  scope="row" width="120"><?php echo $this->_tpl_vars['MOD']['LBL_DRAGGABLE']; ?>
: </td>
		    <?php if ($this->_tpl_vars['settings']['draggable'] == 1): ?>
			<?php $this->assign('draggable_checked', 'CHECKED'); ?>
		    <?php else: ?>
			<?php $this->assign('draggable_checked', ''); ?>
		    <?php endif; ?>
		<td width="25%"><input type='hidden' name='draggable' value='0'><input name='draggable' type="checkbox" value="1" <?php echo $this->_tpl_vars['draggable_checked']; ?>
>
        </td>
        <td>&nbsp</td>
        <td>&nbsp</td>
     
    </tr>
	<tr>
		<td scope="row" width="120"><?php echo $this->_tpl_vars['MOD']['LBL_EXPAND_COLLAPSE_CHAT_TYPE']; ?>
: </td>
		<td width="25%">
		    <select id="expand_collapse_chat" name="expand_collapse_chat">
				<?php echo $this->_tpl_vars['EXPAND_COLLAPSE_CHAT_TYPE']; ?>

			</select>
        </td>
        <td>&nbsp</td>
        <td>&nbsp</td>

	</tr>
	<tr>
		<td scope="row" width="120"><?php echo $this->_tpl_vars['MOD']['LBL_CHAT_LOCATION']; ?>
: </td>
		<td width="25%">
		    <select id="chat_location" name="chat_location">
				<?php echo $this->_tpl_vars['CHAT_LOCATION_LIST']; ?>

			</select>
        </td>
        <td>&nbsp</td>
        <td>&nbsp</td>

	</tr>
	
	<!-- letrium v END -->
</table>

<div style="padding-top: 2px;">
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button primary"  type="submit" name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " />
		&nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href='index.php?module=<?php echo $this->_tpl_vars['return_module']; ?>
&action=<?php echo $this->_tpl_vars['return_action']; ?>
'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " />
</div>
</form>
