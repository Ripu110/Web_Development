<?php
header('Content-Type: application/json');
$response = array('status' => 'success','name'=>$_POST['name'], 'message' => 'Employee details updated successfully.');
 echo json_encode($response);



?>