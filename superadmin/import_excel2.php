<?php
try
{
if(isset($_POST["submit"]))
{

                $url='remotemysql.com';
                $username='zoGJXPbqT5';
                $password='1QNCsdVSph';
                $conn=mysqli_connect($url,$username,$password,"zoGJXPbqT5");
          if(!$conn){
          die('Could not Connect My Sql:' .mysqli_error());
		  }
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          $c = 0;
          while(($filesop = fgetcsv($handle, 20, ",")) !== false)
                    {
		echo "<BR>aa "+$filesop[1];
          $name = $filesop[1];
          $age = $filesop[2];
          $email = $filesop[3];
          $sql = "INSERT INTO import_excel(name,age,email) VALUES ('$name','12','$email')";
			          $stmt = mysqli_prepare($conn,$sql);
		
          mysqli_stmt_execute($stmt);
			echo "<BR> Passed 3".$sql;
echo $c;
echo "<br>";
         $c = $c + 1;
         
           }
echo "<BR> ";

            if($sql){
               echo "sucess";
             } 
		 else
		 {
            echo "Sorry! Unable to impo.";
          }

}
}
catch(Exception $e)
 {
  echo 'Error is ' .$e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<body>
<form enctype="multipart/form-data" method="post" role="form">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file" size="150">
        <p class="help-block">Only Excel/CSV File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
</form>
</body>
</html>