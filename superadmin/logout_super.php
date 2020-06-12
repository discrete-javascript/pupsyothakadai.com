<?php
session_start();
if(isset($_SESSION['uname']))
{
    session_destroy();
    //echo "<h2>Welcome " .$_SESSION['uname']."!</h2>";
    echo "<script>location.href='login_super.php'</script>";
    //header ('Location: login_super.php');
    }
    else{
        echo "<script>location.href='login_super.php'</script>";
        //header ('Location: login_super.php');
     
}
?>