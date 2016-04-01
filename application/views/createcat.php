<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "header.php";
?>
<div class="row">
    <div class="form-group">
<table>
    <form action="" method="post">
        <tr>
            <td>
                Name: </td><td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>
                Description:</td><td><input type="text" name="description"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="createcat" value="Create"></td>
                </tr>
            </td>
        </tr>
    </form>
        
</table>





<?php
include_once "footer.php";
?>