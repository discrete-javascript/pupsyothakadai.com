<html>
<body>
<form enctype="multipart/form-data" method="post" role="form">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file" size="150">
        <p class="help-block">Only Excel/CSV File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="Import" value="Import">Upload</button>
</form>
</body>
</html>





<?php 
if(isset($_POST["Import"]))
{
    //First we need to make a connection with the database
    $host='remotemysql.com'; // Host Name.
    $db_user= 'zoGJXPbqT5'; //User Name
    $db_password= '1QNCsdVSph';
    $db= 'zoGJXPbqT5'; // Database Name.
    $conn=mysql_connect($host,$db_user,$db_password) or die (mysql_error());
    mysql_select_db($db) or die (mysql_error());
    echo $filename=$_FILES["file"]["tmp_name"];
    if($_FILES["file"]["size"] > 0)
    {
        $file = fopen($filename, "r");
        //$sql_data = "SELECT * FROM prod_list_1 ";
        
        $count = 0;                                         // add this line
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
        {
            //print_r($emapData);
            //exit();
            $count++;                                      // add this line
        
            if($count>1){                                  // add this line
              $sql = "INSERT into import_excel(name,age,email) values ('$name[0]','$age[1]','$email[2]')";
              mysql_query($sql);
            }                                              // add this line
        }
        fclose($file);
        echo 'CSV File has been successfully Imported';
        //header('Location: index.php');
    }
    else
        echo 'Invalid File:Please Upload CSV File';
}
?>