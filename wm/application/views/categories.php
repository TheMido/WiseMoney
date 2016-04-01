<?php include_once "header.php";
//print_r($this->input->post('checkID'));
?>
<table>
	<form action = "" method="post">
<?php foreach ($categories as $cat):
    ?>
	<!--<input type="hidden" value="" name="catid">
	<input type="submit" name = "delete" value="Delete"><br>-->
<tr><td>
        <input type="checkbox" name="checkID[]" value="<?=$cat->cid?>">
    </td><td><?=$cat->name?></td><td><?=$cat->description?></td></tr>
        
<?php

endforeach;
?> <tr><td><input type="submit" name="delete" value="Delete"></td></tr><br>

	</form>
</table>
<?php
include_once "footer.php";
?>