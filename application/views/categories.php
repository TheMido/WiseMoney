<?php include_once "header.php";
//print_r($this->input->post('checkID'));
?>
<?php
if (!empty($categories))
{
    ?>
<a href="<?=base_url().'/Category/Create'?>">Add categories</a>
<table>
	<form action = "" method="post">
<?php foreach ($categories as $cat):
    ?>
	<!--<input type="hidden" value="" name="catid">
	<input type="submit" name = "delete" value="Delete"><br>-->
<tr><td>
        <input type="checkbox" name="checkID[]" value="<?=$cat->cid?>">
    </td><td><?=$cat->name?></td><td><?=$cat->description?></td>
<td>You have total of: $<?=$cat->amount;?><?php
if ($cat->amount == NULL)
    echo 0;
?>
    in this category.</td>
</tr>
<?php

endforeach;
?> <tr><td><input type="submit" name="delete" value="Delete"></td></tr><br>

	</form>
</table>
<p>Warning: Deleting a category will delete ALL the payments associated with it!</p>
<?php
}
else
{
    ?>
                <h3 style="text-align:left; font-family:Tale;">
                    You have no categories to manage!
                    <br>
                    <a href="<?=base_url().'/Category/Create'?>">Add categories</a>
                </h3>
<?php
}

include_once "footer.php";
?>