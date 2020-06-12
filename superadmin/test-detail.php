<?php include('includes/htmlStart.php'); ?>
<?php include('includes/header.php'); ?>
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



<?php
session_start();
echo "<h2>Welcome " .$_SESSION['email_id']." by eFreeLearn Team!</h2>";
function getMapKey($array)
{
return($array["pk_questionid"]);
}
echo "START EXAM : <a href='testsession.php?queno=".$queno."'>Start Test</a>";
//$con=new mysqli('remotemysql.com','zoGJXPbqT5','1QNCsdVSph','zoGJXPbqT5');
$con=new mysqli("us-cdbr-iron-east-01.cleardb.net","babf084d814352","f9458d63","ad_0a5fbb782eb4871");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT q.QuestionName,q.pk_questionid,a.answer,a.correct_answer FROM question_info q , answer_info a where q.fk_SchoolId= a.fk_SchoolId and q.fk_SubjectId=a.fk_SubjectId and q.pk_questionid=a.fk_questionid and q.question_type=a.fk_SchoolId";

$resultfromDB = mysqli_query($con,$sql);

$result = $resultfromDB;
$array = array();
 
// look through query
while($row = mysqli_fetch_assoc($result)){

  // add each row returned into an array
  $array[] = $row;
}
//$arrayDB = $row;
//$array = $arrayDB;
$_SESSION["question"] = $array;

$questionInSession = $_SESSION["question"];

// debug:
//print_r($questionInSession); // show all array data

$mapped = array_map(null, $questionInSession);



//print_r($mapped);

$_SESSION["mapppedquestion"] = $mapped;
echo "<BR>sessionmap";
$sessionMap = $_SESSION["mapppedquestion"];
//print_r($sessionMap);

foreach ($sessionMap as $element) {  
       // echo "$element.$pk_questionid";  
      //  echo "$element.$pk_questionid.$QuestionName";  
        //echo "</br>";  
	    } 

echo "</br> andrew"; echo "</br>"; echo "</br>"; 











echo "<table border='1' colspan='4'>";
$child = array();
$queno = 1;
/*
spring.datasource.url=
spring.datasource.username=babf084d814352
spring.datasource.password=f9458d63
spring.datasource.driver-class-name=com.mysql.cj.jdbc.Driver
new mysqli("us-cdbr-iron-east-01.cleardb.net","babf084d814352","f9458d63","ad_0a5fbb782eb4871");
jdbc:mysql://us-cdbr-iron-east-01.cleardb.net/ad_0a5fbb782eb4871?useSSL=false
*/

if($conn->connect_errno)
{
echo $conn->connect_error;
die();
}
else
{
echo "Database connectedtttt";
}

foreach ( $sessionMap as $key => $value )
{
    

   // $sql="INSERT INTO user_answer_info (questions) VALUES ('$cld.$pk_questionid')";
$sql="INSERT INTO user_answer_info (fk_answerid,fk_questionid,fk_SchoolId,fk_SubjectId,fk_chapterid,user_answer) VALUES ($fk_answerid,$fk_questionid,$fk_SchoolId,$fk_SubjectId,$fk_chapterid,$user_answer)";
    echo "$sql";

if($conn->query($sql) === TRUE)
{
    echo "Data stored";
}	
else
{
    echo "Insert data fail" . $sql . "<br>" . $conn->error;
}


echo "<tr ><td colspan='4'>".$key."</td></tr>";
	$child = $value;



foreach ($child as $cld) {  
    
    
echo "<tr>";
 echo "<td> id".$key."</td>";
        echo "<td> id".$cld.$pk_questionid."</td>";
}
         echo "<td> ".$cld.$QuestionName."</td>" ;

   echo "<td> ".$cld.$answer."</td>" ;
echo "</tr>";
	    } 




echo "</table>";





echo "LINK : <a href='testsession.php?queno=".$queno."'>Start Test</a>";
$queno = $queno + 1;

 
$mysqli -> close();




?>








<style>
.QuAnsBlock {
  display: none;
}
#QuAnsBlock1 {
  display: block;
}
</style>
  <script>
function setAnswerValue(answer,questionid) {
var selanswer = answer;
    alert("HI asdas"+answer);
      alert("HI"+questionid);
      //document.forms[0].answer_value+questionid.value=answer;
      document.questionEntry.answer_sel_value.value=answer;
      // document.forms[0].answer_sel_value.value=answer;
      document.forms[0].answer_sel_value.value=selanswer ;
      alert("DONE");
}
	var totalMark = 0;
function displayCurrectionQuestion(p_currentIndex) {

alert(p_currentIndex);
	document.getElementById("result").innerHTML = "";
	var currentIndex= p_currentIndex;
	var currentElementID = "QuAnsBlock"+currentIndex;
	var currentElement = document.getElementById(currentElementID);
alert(p_currentIndex+" " +currentElement );
	currentElement.style.display="none";
	
	var selectedValue = document.getElementById("ans_"+p_currentIndex).value;

	var nextIndex= p_currentIndex+1;
	var nextElementID = "QuAnsBlock"+nextIndex;
	var nextElement = document.getElementById(nextElementID );
	nextElement.style.display="block";

	var lastQuestionValElement = document.getElementById("lastQuestion");
	var lastQuestionValue=lastQuestionValElement.value;

	if(currentIndex == lastQuestionValue)
	{


	nextElement.style.display="none";
	alert("Examp Over");
	document.getElementById("totalMark").value = totalMark;
	document.getElementById("score").innerHTML = "Your Score "+totalMark+"/"+lastQuestionValue;
	

	}


	
}


	function validateAnswer(answer) {


	var resultValue = answer;
	if(resultValue == 'Y')
	{
	totalMark = totalMark + 1;
	document.getElementById("result").innerHTML = "CORRECT";
	
	}
	else
	{
	document.getElementById("result").innerHTML = "WRONG";
	}


}
</script>  
<?php include("db/dbconnection.php")?>

        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Online Test : <?php  echo $_GET['SchoolName'] ." - ". $_GET['SubjectName']; ?> </h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="onlinetest.php">Online Test<i class="fa fa-angle-right"></i></a></li>
                            <li class="current">Test-Detail</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <div class="jobs-wrapper col-md-12 column">           

                            <!--//panel--> 

                            <div class="panel panel-default page-row">
                                <?php
$fk_SchoolId=$_GET['fk_SchoolId']; 
$pk_SubjectId=$_GET['pk_SubjectId'] ;
$i=0;
$j=0;


$sql = "SELECT q.QuestionName,q.pk_questionid,a.answer,a.correct_answer FROM question_info q , answer_info a where q.fk_SchoolId= a.fk_SchoolId and q.fk_SubjectId=a.fk_SubjectId and q.pk_questionid=a.fk_questionid and q.fk_SchoolId='$fk_SchoolId'   and q.fk_SubjectId='$pk_SubjectId'";
 

$result = $mysqli->query($sql);

 

$qno=0;
$ansno=0;
$lastQuestion=0;

$pre_qid="";
echo "<div id='main'> ";
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
$ansno=$ansno+1;
	
	$curr_qid = $row["pk_questionid"];
	if($pre_qid != $curr_qid)
	{
	$qno=$qno+1;
	if($pre_qid!="")
		{
			echo " </div>";
			echo " <div id='submit_row'><div id='submit'><input type=button value='Submit' onclick=displayCurrectionQuestion(".($qno-1).")></div></div>";
			echo " </div>"; 
		}
		
		 echo "<div id='result'></div> <div id='score'><font size='6' color='green'></font></div> </div>\n<div class='QuAnsBlock' id='QuAnsBlock".$qno."' ><div id='row'> <div id='col'>".$qno.")" .$row["QuestionName"]."</div> ";
			echo " <div id='row'> <div id='col'><input type='radio' name='ans_".$qno."' value='".$row["correct_answer"]."' id='ans_".$qno."'  onclick=validateAnswer('".$row["correct_answer"]."')>" .$row["answer"]."</div> ";
	}
	else
	{
		echo " <div id='row'> <input type='radio' name='ans_".$qno."' value='".$row["correct_answer"]."' id='ans_".$qno."'  onclick=validateAnswer('".$row["correct_answer"]."')>"  .$row["answer"]."</div> ";
																	 

	}
		$pre_qid = $curr_qid;
	
    }  

} else {
    echo "0 results";
}
echo " <div id='submit_row'><div id='submit'><input type=button value='Submit' onclick=displayCurrectionQuestion(".($qno-1).")></div></div>";
			echo " </div>"; 
echo "</div> ";
$lastQuestion = $qno;
echo "<div class='QuAnsBlock' id='QuAnsBlock".($qno+1)."'>" ." "."</div> ";
echo "<div class='ClassLastQuestion'><input type='hidden' id='lastQuestion' name='lastQuestion' value='".($lastQuestion-1)."'>";
echo "<input type='text' id='totalMark' name='totalMark'></div>"; 

?>
<?php
$SchoolName=$row["SchoolName"];

echo "<form action='#'>";
  echo "<label for='school'>Select a school:</label>";

  $sql="SELECT SchoolName FROM school_info";
if($result=$conn->query($sql))
{
    if($result->num_rows)
{
while($row=$result->fetch_object())
{

  echo "<select name='school' id='school'>";
    echo "<option value='SchoolName'>$SchoolName</option>";
  echo   "</select>";
}
}
}
else{
    echo "<script>alert('ERROR')</script>";
    echo "<script>location.href='onlinetest.php'</script>";
}
echo "</form>";
?>

                                

    <!-- ******FOOTER****** --> 
<?php include('includes/footer.php'); ?>