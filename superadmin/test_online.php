<?php include('includes/header.php'); ?>

<?php
$conn=new mysqli('us-cdbr-iron-east-01.cleardb.net','babf084d814352','f9458d63','ad_0a5fbb782eb4871');
if($conn->connect_errno)
{
echo $conn->connect_error;
die();
}
else
{
echo "Database connected";
echo "<br><br><br>";
}
$sql=mysqli_query($conn,"SELECT * FROM school_info");
?>

 <label for="school">Select a school:</label>
<select>

<?php
while($result=mysqli_fetch_array($sql))
{
  $pk_SchoolId=$result['pk_SchoolId'];
    ?>
    <option value="<?php echo $pk_SchoolId; ?>">
    <?php
    echo $result['SchoolName'];
    //echo "<br>";
    ?> 
    </option>
    
<?php
}
?>

</select>
<style>
                table {
            
                    border-collapse: collapse;
                   
  width: 100% ;
}
th, td {
  
  text-align: center;
  padding: 8px;
} 
tr:nth-child(even) {background-color: #f2f2f2;}
</style>

<div style="overflow-x:auto;">


<?php


$sql="SELECT chapterdetail,classname,QuestionName,SubjectName FROM chapter_info,class_info,question_info,subject_info";

?>
<div id="demo">

<button type="button" onclick="loadDoc()">Submit</button>
</div>



<script>
function loadDoc() 
{
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "test_online_display.php", true);
  xhttp.send();
}
</script>





</div>



<?php include('includes/footer.php'); ?>


