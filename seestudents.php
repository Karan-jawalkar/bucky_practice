<?php

include 'connection.php';
$json_response = array(); 
$query = "select Name,Class,Address from student";
$result = mysql_query($query);

while($row1=mysql_fetch_array($result)){
	$record=array();
	$record['name']=$row1['Name'];
	$record['class']=$row1['Class'];
	$record['address']=$row1['Address'];
	
	array_push($json_response, $record); //push the values in the array
}
echo json_encode($json_response);
die;


?>