<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "header.php"; ?>
<?php if ($num_of_payments > 0)
{
    ?>
<h3 style="text-align:left; font-family:Tale;">
    Current payments (average: <b>$<?=round($average[0]['amount'])?></b> out of total <b><?=$num_of_payments?></b> payments)</h3>
<h4>Maximum payment amount is: <b><?=$maxpayment[0]['amount']?></b> in category <strong><?=$maxpayment[0]['name']?></strong>. </h4>
<h3><a href="<?=base_url().'Payments/Add'?>">Add payments</a>   
<div class="col-md-6 portfolio-item" style="width:100%">
    
    <?php
        foreach ($payments as $pay):
            ?>
    <h3 style="text-align:left; font-family:Tale;">
                #<?= $pay->id?>
            </h3>
            <div class="box box-primary">
                <div class="offers">
                    <p class="offersText" style="display:inline;">$<?=$pay->amount?></p>
                    <p style="float:right; font-size:20px; margin-right:10px;"> <?=$pay->name?></p><br />
                    <p class="offersText" style="font-size:15px;"><?=$pay->datetime?></p>
                    <p class="offersText" style="font-size:15px;"><?=$pay->notes?></p>
                    <a href="<?=base_url().'Payments/edit?id='?><?=$pay->id?>">Edit</a>
                </div>
			</div>
    <?php
        endforeach;
        if (!empty($pagination))
        {
            echo $pagination;
        }
        //echo $this->pagination->create_links();
 ?>
    <?php include_once "footer.php"; ?>
</div>
<?php
}
else
{
?>
    <h2>You currently have no payments!</h2>
        <h3 style="text-align:left; font-family:Tale;">
        <a href="<?=base_url().'Payments/Add'?>">Add payments  
<?php
}
?>