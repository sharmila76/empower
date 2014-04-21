<?php /* Smarty version 2.6.11, created on 2014-04-21 12:18:50
         compiled from modules/Eval_Evaluations/Assigntest.html */ ?>
<form name="EditView" method="GET" action="index.php">
    <input type="hidden" name="module" value="Eval_Evaluations">
    <input type="hidden" name="action" value="Assigntest">

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

<form method="POST" action="index.php">
    <input type="hidden" name="module" value="Eval_Evaluations">
    <input type="hidden" name="action" value="Assigntest">
    
    <?php if ($this->_tpl_vars['questions_list']): ?>
    <?php $_from = $this->_tpl_vars['questions_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
    <table>
        <tr>
        <input type="hidden" name="question[]" value="<?php echo $this->_tpl_vars['value']['question_code']; ?>
">
        <input type="hidden" name="correct_answer[]" value="<?php echo $this->_tpl_vars['value']['correct_answer']; ?>
">
        <td><?php echo $this->_tpl_vars['value']['question_name']; ?>
</td>
        </tr>
        <tr>
            <td><input name="<?php echo $this->_tpl_vars['value']['question_code']; ?>
[]" type="checkbox" value="<?php echo $this->_tpl_vars['value']['answer1']; ?>
"><?php echo $this->_tpl_vars['value']['answer1']; ?>
</td>
        </tr>   
        <tr>    
            <td><input name="<?php echo $this->_tpl_vars['value']['question_code']; ?>
[]" type="checkbox" value="<?php echo $this->_tpl_vars['value']['answer2']; ?>
"><?php echo $this->_tpl_vars['value']['answer2']; ?>
</td>
        </tr>
        <tr>
            <td><input name="<?php echo $this->_tpl_vars['value']['question_code']; ?>
[]" type="checkbox" value="<?php echo $this->_tpl_vars['value']['answer3']; ?>
"><?php echo $this->_tpl_vars['value']['answer3']; ?>
</td>
        </tr>
        <tr>
            <td><input name="<?php echo $this->_tpl_vars['value']['question_code']; ?>
[]" type="checkbox" value="<?php echo $this->_tpl_vars['value']['answer4']; ?>
"><?php echo $this->_tpl_vars['value']['answer4']; ?>
</td>
        </tr>
        <tr>
            <td>---</td>
        </tr>
    </table>
    <?php endforeach; endif; unset($_from); ?>
    <input type="submit" value="Submit Test" name="submit_test">
    <?php endif; ?>    
</form>

