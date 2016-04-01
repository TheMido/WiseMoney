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

        /*#logo:hover{
            color: white ;
        }*/

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
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url().'assets/js/bootstrap.min.js'?>"></script>

	<script src="<?=base_url().'assets/js/bootstrap.js'?>"></script>
	<script src="<?=base_url().'assets/js/bootstrap.min.js'?>"></script>
<script>
$(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.form-group').find('button[data-toggle="dropdown"]').html(selText+' <span class="caret"></span>');
});
</script>
    
</head>

<body>
 <nav class="navbar navbar-default" role="navigation" style="background-color:#686767;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="logo" style="font-family:'Exo BoldItalic';" href="<?=base_url().'Start/'?>">Wi$e Money</a>
				<h2>Welcome, <?= $this->session->username;?>!</h2>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?=base_url().'Profile'?>" style="color:white;">Settings</a>
                    </li>
                    <li>
                        <a style="color:white;" href="<?=base_url().'Analytics'?>">Analytics</a>
                    </li>
                   <li>
                        <a href="<?=base_url().'Payments'?>" style="color:white;">Check Payments</a>
                    </li>
                    <li>
                        <a href="<?= base_url().'Start/logout'?>" style="color:white;">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="container">
