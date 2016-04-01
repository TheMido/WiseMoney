<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- for IE Comptability-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For mobile devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Wise Money">
    <meta name="author" content="MMW">

    <title>Wise Money</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">

    <link href="<?=base_url().'assets/css/AdminLTE.css'?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/datepicker.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url().'assets/css/2-col-portfolio.css'?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #logo {
            color: #f1c40f;
            float: left;
            height: 50px;
            padding: 15px 15px;
            font-size: 30px;
            line-height: 20px;
            /*text-shadow: -1px -1px 0 #9b59b6, 1px -1px 0 #9b59b6 -1px 1px 0 #9b59b6, 1px 1px 0 #9b59b6*/
        }

        #logo:hover{
            color: white ;
        }

        .offers{
            margin-left:5px;
            font-family:'Helvetica Neue LT Arabic';
            margin-top:0px;
            padding-bottom:10px;
            padding-top:10px;
        }
        .offersText{
            font-size:20px;
        }
       
    </style>
    <!-- jQuery -->
      <link rel="stylesheet" href="<?=base_url().'assets/css/jquery-ui.css'?>">

     <script src="<?=base_url().'assets/js/jquery-1.9.1.js'?>"></script>
  <script src="<?=base_url().'assets/js/jquery-ui.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url().'assets/js/bootstrap.min.js'?>"></script>

	<script src="<?=base_url().'assets/js/bootstrap.js'?>"></script>
	<script src="<?=base_url().'assets/js/bootstrap.min.js'?>"></script>
	<script src="<?=base_url().'assets/js/bootstrap-datepicker.js'?>"></script>
	<script src="<?=base_url().'assets/js/custom.js'?>"></script>
    
</head>

<body>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #686767">
            <!-- Brand and toggle get grouped for better mobile display -->
             <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="logo" style="font-family:'Cubano';" href="<?=base_url().'Start/'?>">Wi$e Money</a>
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php if (isset($_SESSION['loggedin']) && ($_SESSION['type'] == "user"))
                { ?>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?=base_url().'Profile'?>" style="color:white;">Settings</a>
                    </li>
                    <li>
                        <a style="color:white;" href="<?=base_url().'Analytics'?>">Analytics</a>
                    </li>
                    <li>
                        <a style="color:white;" href="<?=base_url().'Category'?>">Spending Categories</a>
                    </li>
                   <li>
                        <a href="<?=base_url().'Payments'?>" style="color:white;">Check Payments</a>
                    </li>
                    <li>
                        <a href="<?= base_url().'Start/logout'?>" style="color:white;">Logout</a>
                    </li>
                </ul>
                
                    <h4 style="float:right; color:white "> <?= $this->session->username;?> </h4>
                
                    <?php
                }
                    elseif (isset($_SESSION['loggedin']) && ($_SESSION['type'] == "place"))
                    {?>
                        <ul class="nav navbar-nav">
                    
                    <li>
                        <a style="color:white;" href="<?=base_url().'Offers'?>">Offers</a>
                    </li>
                   <li>
                        
                    </li>
                    <li>
                        <a href="<?= base_url().'Start/logout'?>" style="color:white;">Logout</a>
                    </li>
                </ul>
                
                    <h4 style="float:right; color:white "> <?= $this->session->name;?> </h4>
                   <?php }
                    ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="container">
