<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "header.php";
?>

<h2><?=$user->username?></h2>
<h3><?=$user->city?>, <?=$user->country?></h3>
<form action="" method="post">
    <table>
        <tr><td>Change email: </td><td><input type="text" name="email" value="<?=$this->session->email?>"></td>
        </tr>
        <tr><td>New password: </td><td><input type="password" name="password"></td>
        </tr>
        <tr><td>City: </td><td><input type="text" name="city" value="<?=$user->city?>"></td>
        </tr>
        <tr><td>Country: </td><td><input type="text" name="country" value="<?=$user->country?>"></td>
        <tr>
        <td><input type="submit" value="Update profile" name="update">
        </td>
        </tr>
    </table>
    <p>You currently have <?=$totalpayments?> payments.</p>
</form>



<?php
include_once "footer.php";

?>