

<table border='1' cellspacing='10' cellpadding='20p'><tr><th>Class</th><th>Subject</th><th>Chapter</th><th>Questions</th>
<?php
if($result=$conn->query($sql))
{
if($result->num_rows)
{
while($row=$result->fetch_object())
{
 
echo <tr><td>".$row->classname."</td><td>".$row->SubjectName."</td>
<td>."$row->chapterdetail."</td><td>".$row->QuestionName."</td></tr>;


}
}
}
?>
</table>







   