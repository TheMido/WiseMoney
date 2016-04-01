<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once "header.php";
?>

        <div class="row">
            <h1 style="text-align:center; color: #222121; font-family:Tale">Sign Up As A Place</h1>
        </div>
        <div class="box box-primary">

            <!-- form start -->
            <form role="form" action="" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="rePassword">ReEnter Password</label>
                        <input type="password" class="form-control" id="rePassword" placeholder="ReEnter Password">
                    </div>
                    <div class="form-group">
                        <label for="country">Address</label>
                        <input type="text" class="form-control" id="name" placeholder="Address" name="address">
                    </div>

                    <div class="form-group">
                        <!--<div>
                            <label for="captcha">Are you a Human?</label><br />
                            <input type="text" class="form-control" id="captcha" placeholder="Enter what you see" style="width:70%; display:inline"> <wbr />
                            <span style="width:30px; height:10px;">
                                <img src="image/input-black.gif" width="150px" height="50px">
                            </span>
                    </div>-->
                    <div class="form-group">
                            <input type="submit" class="btn btn-primary" style="float:left" name="submitplace">
                           
                    </div>
                        

                    </div>
                </div><!-- /.box-body -->
            </form>
            
        </div><!-- /.box -->

    </div>

    
    <?php 
    include_once "footer.php";
    ?>
