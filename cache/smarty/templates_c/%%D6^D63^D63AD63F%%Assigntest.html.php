<?php /* Smarty version 2.6.11, created on 2014-04-22 09:29:18
         compiled from modules/Eval_Evaluations/Assigntest.html */ ?>
<form name="EditView" method="GET" action="index.php">
    <input type="hidden" name="module" value="Eval_Evaluations">
    <input type="hidden" name="action" value="Questions">

    <table style="border:1px solid silver; padding:5px; margin-bottom:10px;">
        <tr>
            <td>
                <label>Name of the candidate</label>
            </td>
            <td>
                <input type="text" name="candidate_name" value=<?php echo $this->_tpl_vars['candidate_name']; ?>
>
            </td>
        </tr>
        <tr>
            <td>
                <label>Select Subject</label>
            </td>
            <?php if ($this->_tpl_vars['SUBJECT_LIST']): ?>
            <td><select name='subject_name'>
                    <?php $_from = $this->_tpl_vars['SUBJECT_LIST']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                    <option value="<?php echo $this->_tpl_vars['value']['subject_description']; ?>
"><?php echo $this->_tpl_vars['value']['subject_description']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>
                <label>Number of Questions</label>
            </td>
            <td>
                <input id="number_of_questions" type="text" name="number_of_questions" value=<?php echo $this->_tpl_vars['questions']; ?>
>
            </td>        
        </tr>
        <td>
            <label>Time Allocated</label> 
        </td>
        <td>
            <input id="time_allocation" type="text" name="allocation_time">Minutes
        </td>
    </table>
    <input type="submit" value="Start" name="start_test">
</form>



