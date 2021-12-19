<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database table</title>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
	<tr>
		<th>f_name</th>
		<th>l_name</th>
		<th>emp_id</th>
		<th>salary</th>
		<th>location</th>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr><tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
</body>
</html>
<?php
// require "htmltable.php"; how it can be used.
$server_name = "localhost";
$user_name = "root";
$password ="";
$db_name = "student";

$connection = new mysqli($server_name, $user_name, $password, $db_name);
if ($connection->connect_error){
	var_dump($connection->connect_error);
	die();
}
else{
	// echo "your database is connected successfully<br>";
}

 $sql="select * from employee";
 $result=$connection->query($sql);

// mysqli_query($conn , $sql);

$data=mysqli_fetch_all($result , MYSQLI_ASSOC);
 // echo "<pre>";
 // var_dump($data);
 foreach ($data as $key => $value) {
 	echo $value["f_name"]." ".$value["l_name"]." ".$value["emp_id"]." ".$value["salary"]." ".$value["location"];// code...
 	echo "<pre>";
 }
?>