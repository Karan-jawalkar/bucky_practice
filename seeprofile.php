<?php
include 'connection.php';
$result_array = array();
$where = "sachin";
$query = "Select Id,Name,Class,Address from student where Name = '$where'";
$result = mysql_query($query) or trigger_error(mysql_error().$query);
$row1=mysql_fetch_array($result);
$result_array['id'] = $row1['Id'];
$result_array['name'] = $row1['Name'];
$result_array['class'] = $row1['Class'];
$result_array['address'] = $row1['Address'];
echo json_encode($result_array);
die;
?>