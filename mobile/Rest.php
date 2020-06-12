<?php
/* include db.config.php */

$db_host = "localhost"; //hostname
$db_user = "root"; // username
$db_password = "Admin@123#"; // password
$db_name = "learns84_onlinetest"; //database name
$conn = mysql_connect($db_host, $db_user, $db_password );
mysql_select_db($db_name, $conn);
// Get user id
 
// get user data
$sql = "SELECT * FROM users ";
$select = mysql_query($sql);
$result = array();
while($data = mysql_fetch_assoc($select)) {
$result[] = $data;
}
$data = array("result" => 0, "data" => $result);

mysql_close($conn);
/* JSON Response */
header('Content-type: application/json');
echo json_encode($data);
?>