	<?php include('includes/header.php'); ?>  


<?php
session_start();
function getMapKey($array)
{
return($array["pk_questionid"]);
}
echo "START EXAM : <a href='testsession.php?queno=".$queno."'>Start Test</a>";
$con=new mysqli('remotemysql.com','zoGJXPbqT5','1QNCsdVSph','zoGJXPbqT5');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT q.QuestionName,q.pk_questionid,a.answer,a.correct_answer FROM question_info q , answer_info a where q.fk_SchoolId= a.fk_SchoolId and q.fk_SubjectId=a.fk_SubjectId and q.pk_questionid=a.fk_questionid ";

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
foreach ( $sessionMap as $key => $value )
{

echo "<tr ><td colspan='4'>".$key."</td></tr>";
	$child = $value;


foreach ($child as $cld) {  
echo "<tr>";
 echo "<td> id".$key."</td>";
        echo "<td> id".$cld.$pk_questionid."</td>";
         echo "<td> ".$cld.$QuestionName."</td>" ;
   echo "<td> ".$cld.$answer."</td>" ;
echo "</tr>";
	    } 



}
echo "</table>";





echo "LINK : <a href='testsession.php?queno=".$queno."'>Start Test</a>";
$queno = $queno + 1;

 
$mysqli -> close();



?>




<?php include('includes/footer.php'); ?>





