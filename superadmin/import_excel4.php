<?php
$connect=mysqli_connect("remotemysql.com","zoGJXPbqT5","1QNCsdVSph",'zoGJXPbqT5');
if(isset($_POST["submit"]))
{
  if($_FILES['file']['name'])
  {
    $filename=explode('.',$_FILES['file']['name']);
    if($filename[1]=='csv')
    {
      $handle=fopen($_FILES['file']['tmp_name'],"r");
      while($data=fgetcsv($handle))
      {
        $item1=mysqli_real_escape_string($connect,$data[0]);
        $item2=mysqli_real_escape_string($connect,$data[1]);
        //$item3=mysqli_real_escape_string($connect,$data[2]);
        $sql="INSERT INTO import_excel(name,email) VALUES ('$item1','$item2')";
        mysqli_query($connect,$sql);
      }
      fclose($handle);
      print "File is uploaded..!";
    }
  }
}


?>
<!DOCTYPE html>
<html>
<body>
<form method="post" enctype="multipart/form-data">
    <div align="center">
    <p>Upload CSV: <input type='file' name='file' /></p>
    <p><input type='submit' name='submit' value='upload' /></p>
    </div>
    
</form>
</body>
</html>














