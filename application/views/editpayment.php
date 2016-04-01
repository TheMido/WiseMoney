<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "header.php"; ?>
<form action="" method="post">
    <table>
        <tr><td>Edit amount: </td><td><input type="text" name="amount" value="<?=$payment['amount']?>"></td></tr>
        <tr><td>Edit note: </td><td><input type="text" name="notes" value="<?=$payment['notes']?>"></td></tr>
        
        <select name="category">
        <?php foreach ($categories as $cat):
        ?>
            <option value="<?=$cat->cid?>"><?=$cat->name?></option>
        
        <?php
        endforeach;
        ?>
        </select>
        <input type="submit" name="updatepayment" value="Edit">
    </table>
</form>
<?php //print_r($cats); ?>
<?php include_once "footer.php"; ?>