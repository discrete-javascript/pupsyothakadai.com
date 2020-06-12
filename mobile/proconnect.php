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


if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	
	if($name!=""&&$email!=""&&$phone!=""&&$message!="")
	{
		$sql="INSERT INTO project (name,email,phone,message) VALUES ('$name','$email',$phone,'$message')";
		if($conn->query($sql) === TRUE)
		{
			echo "Data stored";
		}	
		else
		{
			echo "Insert data fail" . $sql . "<br>" . $conn->error;
		}
	}
	else
	{
		echo "All fields required";
	}
}
?>