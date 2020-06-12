	<?php include('includes/header.php'); ?>  


<?php
session_start();
?>
<nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a href="onlinetest.php">Online test</a></li>
                        

			<li class="nav-item"><a href="logout_user.php">Logout </a></li>
			
   
    
  </div> 
  
  </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav>
        <style>
div.a {
  
  margin: 25px 50px 75px 100px;
  
}
</style>

<?php
echo "<h2>Welcome " .$_SESSION['email_id']." by eFreeLearn Team!</h2>";
$sessionMap = $_SESSION["mapppedquestion"];

echo "<div class='a'>";
echo "<form action='' method='post'>";
//echo " <tr><td><table border='1' colspan='4'>";
$child = array();

$queno = $_GET['queno'];

$last= count($sessionMap);
$first= 0;

$colspan=1;
foreach ( $sessionMap as $key => $value )
{
if($key==$queno)
{


	$child = $value;


    foreach ($child as $cld) {  
        $colspan=$colspan+1;
        
        
         echo " Q.No .$key.";
                echo "<input type='radio' id='qid' name='question' value='a'>
                <label for='que'>".$cld.$pk_questionid."</label>";
                echo "<br>";
    }
}
        }
                 echo "<input type='radio' id='que' name='question' value='b'>
                 <label for='que'>".$cld.$QuestionName."</label>";
                 echo "<br>";

           echo "<input type='radio' id='ans' name='answer' value='c'>
                <label for='que'>".$cld.$answer."</label>";
 

//href= onclick explict
//how to submit form on click href
//method post

//echo "</tr>";
//echo "</td></tr>";

$next = $queno + 1;
$previous = $queno - 1;

//sel count sum frm crct ans
//hw to find count from sql


//echo "<TR width='100%'><TD colspan=".$colspan."><table border='1' align='center' width='100%'><tr>

echo "<a href='testsession.php?queno=".$first."'><button type='button'>First</button></a>";
echo "<button type='submit' formaction='testsession.php?queno=".$next ."' name='submit'>Next</button>";
echo "<a href='testsession.php?queno=".$previous."'><button type='button'>Previous</button></a>";
echo "<a href='testsession.php?queno=".$last."'><button type='button' >Last</button></a><br>";
echo "<a href='test_mark.php'><button type='button' class='btn btn-theme'>Finish Exam</button></a>";

//echo "<button type='submit' name='submit'>Submit</button>";
echo "</div>";



echo "</form>"; 




?>

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
      $question=$_POST['question'];
      //$email_id=  $_SESSION["$email_id"];
      //$_SESSION['email_id']="$email_id";
      
	
	
	if($question!="")
	{
		$sql="INSERT INTO user_answer_info (user_selected_answer) VALUES ('$question')";
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









<?php include('includes/footer.php'); ?>





