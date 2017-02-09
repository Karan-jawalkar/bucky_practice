<?php

include 'connection.php';
$result_array = array();
$json_response = array(); 
$query = "select UserName, Password from login";
$result = mysql_query($query) or trigger_error(mysql_error().$query);
$row1=mysql_fetch_array($result);

$result_array['name'] = $row1['UserName'];
$result_array['class'] = $row1['Password'];

echo json_encode($result_array);
die;


?>