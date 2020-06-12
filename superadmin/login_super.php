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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="login_super.php">Login</a></li>                        

                        

                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav>


<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Login</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Login</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 

                <form class="form-horizontal" action="connect_super.php" method="post">                     
                            <div class="form-group">
                                    <label for="user" class="col-sm-2 control-label">User Name</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control" name="uname" placeholder="user name">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-7">
                                      <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                  </div>     
                                   <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-7">
                                      <button type="submit" class="btn btn-theme" name="submit">Login</button>
                                    </div>
                                  </div>
                           </form>





              
                
                </div>
                </div>
                <?php include('includes/footer.php'); ?>