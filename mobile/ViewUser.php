
<!DOCTYPE html>
<html>
<body>
<?php include("db/dbconnection.php")?>
<?php

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM user_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["user_name"]. " - Name: ". $row["password"]. " " . $row["email_id"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
