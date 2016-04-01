<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once "header.php";
?>

<div class="row">
            <div class="col-md-6 portfolio-item">
                <div class="bs-callout bs-callout-danger" id="callout-buttons-ie-disabled">
				
			  </div>
                <h3 style="text-align:left; font-family:Tale;">
                    Add Payment
                </h3>
                <div class="box box-primary">
                   <form role="form" method="post" action="">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="text" name="amount" class="form-control" id="amount" placeholder="Enter Amount" style="width:70%"> <wbr />
                            </div>
                            <div class="form-group">
                                
                                <input type="text" class="form-control" id="note" placeholder="Enter a note" name="notes">
                            
                                                 
                                    <!--<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Travelling</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Food</a></li>-->
									Category: 
                                                                        <select name="category">
                                                                            <?php 
                                                                            foreach ($categories as $cat)
                                                                                echo "<option value='".$cat->cid."'>".$cat->name."</option>";
                                                                            ?>
									</select>
									<br><a href="editcat.php">Edit</a><br>

                           

                            <input type="submit" value="Submit" class="btn" href="#" style=" background-color:#2ecc71; color:white; margin-top:10px;">
                           
                           
                        </div><!-- /.box-body -->
                       
                    </form>
                </div><!-- /.box -->
               

            </div>
            <div class="col-md-6 portfolio-item">
                <h3 style="text-align:left; font-family:Tale;">
                    Search your history
                </h3>
                <div class="box box-primary">

                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Enter date or note">
                            </div>
                            <a class="btn" href="#" style=" background-color:#2ecc71; color:white;">Search</a>

                        </div><!-- /.box-body -->
                       
                    </form>
                </div><!-- /.box -->
               

        </div>
            </div>
</div>

<?php include_once "footer.php";
?>