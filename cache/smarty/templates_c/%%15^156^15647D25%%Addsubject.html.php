<?php /* Smarty version 2.6.11, created on 2014-04-19 06:05:01
         compiled from modules/Eval_Evaluations/Addsubject.html */ ?>
<form name="EditView" method="GET" action="index.php">
<input type="hidden" name="module" value="Eval_Evaluations">
<input type="hidden" name="action" value="Addsubject">

<table>
    <tr>
        <td>
            <label>Subject code</label>
        </td>
        <td>
            <input type="text">
        </td>
    </tr>
    <tr>
        <td>
            <label>Description</label>
        </td>
        <td>
            <input type="text" name="question_name" placeholder="Enter question name">
        </td>
    </tr>
    <tr>
        <td>
            <label>Number of questions</label>
        </td>
        <td>
            <input id="number_of_questions" type="text" name="number_of_questions">
        </td>
        <td>
           <label>Time Allocation</label> 
        </td>
        <td>
            <input id="time_allocation" type="text" name="time_allocation">Minutes
        </td> 
    </tr>    
    <tr>
        <td>
            <input type="submit" name="subject" value="Submit">
        </td>
        <td>
            <input type="submit" name="cancel" value="Cancel">
        </td>
    </tr>
</table>
</form>

