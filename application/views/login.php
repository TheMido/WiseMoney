<?php
include_once ('header.php'); ?>

<!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1  style="text-align:center; color: #222121; font-family:Tale ; color:#3c8dbc;" >Login</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <h3 style="text-align:center">
                    As a User
                </h3>
                <div class="box box-primary">
                    
                    <!-- form start -->
                    <!--<form role="form" action="" method="post">-->
                    <?php //echo validation_errors(); ?>
                    <form action="" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>
                           
                            <div class="checkbox">
                                
  								<input style=" background-color:#2ecc71; color:white;margin-left:10px; margin-right:10px;" class="btn" type="submit" value="Login" style="background-color:#2ecc71; color:white;margin-left:10px; margin-right:10px;" name="userlogin">
								<!--<a class="btn" href="#" style=" background-color:#2ecc71; color:white;margin-left:10px; margin-right:10px;">Login</a>-->
                                <a class="btn" href="<?=base_url().'Usersignup'?>" style="float:right; background-color:#1774aa; color:white;">Sign Up</a>
                                

                            </div>
                        </div><!-- /.box-body -->
                       
                    </form>
                </div><!-- /.box -->
               

            </div>
            
            
            
            <div class="col-md-6 portfolio-item">
                <h3 style="text-align:center">
                    As a Place
                </h3>
                <div class="box box-primary">
                    
                    <!-- form start -->
                    <!--<form role="form" action="" method="post">-->
                    <?php //echo validation_errors(); ?>
                    <form action="" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>
                           
                           
  								<input class="btn" href="#" style=" background-color:#2ecc71; color:white;margin-left:10px; margin-right:10px;" type="submit" value="Login"name="placelogin">
								<!--<a class="btn" href="#" style=" background-color:#2ecc71; color:white;margin-left:10px; margin-right:10px;">Login</a>-->
                                <a class="btn" href="<?=base_url().'Placesignup'?>" style="float:right; background-color:#1774aa; color:white;">Sign Up</a>
                                

                            </div>
                        </div><!-- /.box-body -->
                       
                    </form>
                </div><!-- /.box -->
               

            </div>
<?php include_once ('footer.php'); ?>