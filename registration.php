<?php

include 'connection.php';
$name = $_REQUEST['Name'];
$city = $_REQUEST['City'];
$username = $_REQUEST['Username'];
$password = $_REQUEST['Password'];   


$query = mysql_query("INSERT INTO `Registration`(`Name`, `City`,`Username`,`Password`) VALUES ('$name','$city','$username','$password');");
//echo $query;
$response;
if($query){
	$response = "success";
}
else{
	$response = "fail";
}
echo json_encode($response);

?>