 
<?php
$conn=new mysqli('remotemysql.com','zoGJXPbqT5','1QNCsdVSph','zoGJXPbqT5');
if($conn->connect_errno)
{
echo $conn->connect_error;
die();
}
else
{
echo "Database connected";
}

session_start();
 
    $uname=$_POST['uname'];
	$password=$_POST['password'];
	$result=mysqli_query($conn, 'SELECT * from admin where uname="'.$uname.'" AND password="'.$password.'"');
	if(mysqli_num_rows($result)==1)
	{
			$_SESSION['uname']="$uname";
			//echo "<h1>Welcome " .$_SESSION['uname']"!</h1>";
			//$_SESSION['shop']='Sony DIGICAM';
			header ('Location: welcome_super.php');
		   //echo "<script>location.href='welcome_super.php'</script>";
		  // echo 'The value of shop '.$_SESSION['shop'];
	}
	else{
		echo "<script>alert('User name or password is incorrect!')</script>";
		echo "<script>location.href='login_super.php'</script>";
	}
	//if(isset($_GET['logout']))
	//{
	//	session_unregister('uname');
	//}
?>
<?php include('includes/footer.php'); ?>