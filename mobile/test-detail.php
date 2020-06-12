<?php include('includes/htmlStart.php'); ?>
<?php include('includes/header.php'); ?>
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

function displayCurrectionQuestion(p_currentIndex) {

	document.getElementById("result").innerHTML = "";
	var currentIndex= p_currentIndex;
	var currentElementID = "QuAnsBlock"+currentIndex;
	var currentElement = document.getElementById(currentElementID);
	currentElement.style.display="none";
	
	var selectedValue = document.getElementById("ans_"+p_currentIndex).value;

	var nextIndex= p_currentIndex+1;
	var nextElementID = "QuAnsBlock"+nextIndex;
	var nextElement = document.getElementById(nextElementID );
	nextElement.style.display="block";

	var lastQuestionValElement = document.getElementById("lastQuestion");
	var lastQuestionValue=lastQuestionValElement.value;
	alert("lastQuestion"+lastQuestionVal);
	alert("p_currentIndex"+p_currentIndex);
	alert("nextIndex"+nextIndex);
	if(nextIndex === lastQuestionValue)
	{
	alert("Examp Over");
	}
	else
	{
	alert("Please continn");
	}

	
}

function validateAnswer(answer) {


	var resultValue = answer;
	if(resultValue == 'Y')
	{
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
		
		 echo "<div id='result'></div> </div>\n<div class='QuAnsBlock' id='QuAnsBlock".$qno."' ><div id='row'> <div id='col'>".$qno.")" .$row["QuestionName"]."</div> ";
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
echo "<div class='QuAnsBlock' id='QuAnsBlock".($qno+1)."'>" ."andrew"."</div> ";
echo "<div id='lastQuestion' name='lastQuestion' value='".$lastQuestion."'></div>"; 

?>


                                

    <!-- ******FOOTER****** --> 
<?php include('includes/footer.php'); ?>