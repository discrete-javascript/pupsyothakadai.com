<?php

//$mysqli = new mysqli("localhost","u319732989_root","Admin@123#","u319732989_onlinetest");

$mysqli = new mysqli("remotemysql.com","zoGJXPbqT5","1QNCsdVSph","zoGJXPbqT5");
 
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
echo 'Connected successfully 1';

echo 'Connected successfully 2';

?>