<?php include('includes/header.php'); ?>  

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
echo "<br>";
}

$sql="SELECT q.pk_questionid,q.QuestionName,a.pk_answerid,a.answer FROM question_info q, answer_info a WHERE q.pk_questionid=a.pk_answerid ORDER BY q.pk_questionid,a.pk_answerid";
if($result=$conn->query($sql))
{
if($result->num_rows)
{
while($row=$result->fetch_object())
{
//$arr=array("$QuestionName","$answer");
//echo "> " . $arr[0] . "----> " . $arr[1] .;   
echo "$row->QuestionName";
echo "---->";
echo "$row->answer";
echo "<br>";



//try {
   //row(0);
    //If the exception is thrown, this text will not be shown
    //echo 'Message: ' .$e->getMessage();
  //}
  
  //catch exception
  //catch(Exception $e) {
    //echo 'Message: ' .$e->getMessage();
  //}
}
}
}

?>
<?php include('includes/footer.php'); ?>
