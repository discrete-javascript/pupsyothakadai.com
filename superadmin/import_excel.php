
<?php include('includes/header.php'); ?>

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


<?php
if(isset($_POST["submit"]))
{

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
    
		  }
          $file = $_FILES['file']['import.xls'];
          $handle = fopen($_FILES["import.xls"], "r");
          $c = 0;
          while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                    {
          $name = $filesop[1];
          $age = $filesop[2];
          $email = $filesop[3];
          $sql = "INSERT INTO import_excel(name,age,email) values ('$name',$age,'$email')";
          //echo $name;
          $stmt = mysqli_prepare($conn,$sql);
          mysqli_stmt_execute($stmt);

         $c = $c + 1;
           }

            if($sql){
                
               echo "Your file is uploaded successfully!";
             
             } 
		 else
		 {
            echo "Sorry! Unable to upload.";
          }


?>
</body>
</html>


<?php include('includes/footer.php'); ?>


