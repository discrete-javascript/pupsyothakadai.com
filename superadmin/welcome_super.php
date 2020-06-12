<?php include('includes/header.php'); ?> 

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="reports.php">All reports</a></li>
                        <li><a href="registered_user.php">Registered user reports</a></li>                        

                        <li><a href="registered_org.php">Registered user with organisation reports</a></li>
    	       

                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav>


<html>
<head>
<style>
h1 {text-align: center;}
h2 {text-align: center;}
</style>
</head>


<h1>Login Successful</h1>

                     

                <?php
session_start();
echo "<h2>Welcome " .$_SESSION['uname']."!</h2>";
//echo 'The value of shop '.$_SESSION['shop'];
?>                


               



<a href="logout_super.php"><button class="btn btn-theme">Logout</button></a>                                   
      
      <?php include('includes/footer.php'); ?>
      </html>