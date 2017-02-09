<?php     
$con=mysql_connect("localhost","root","")or die("Could not connect to database");
$db=mysql_select_db("lic",$con);

$mysqli = new mysqli("localhost", "root", "", "lic");
if ($mysqli->connect_errno) {
echo "Failed to connect to MySQL:(".$mysqli->connect_errno.")".$mysqli->connect_error;
} 
?>