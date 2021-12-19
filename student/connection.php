<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	//echo "connection created successfully";
}
$sql = "SELECT * FROM user";
//$result = mysqli_query($conn, $sql);
$result = $conn->query($sql);
$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
// echo "<pre>";
// var_dump($data);
foreach ($data as $value) {
	echo $value['fname'].' '.$value['lname'];
	echo "<br>";
}

$a="keshav chauhan";
?>

<p style="color:red"><?= $a; ?></p>