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
}

// sql to delete a record
$sql = "DELETE FROM employee WHERE emp_id='".$_GET['id']."'";

if ($conn->query($sql) === TRUE) {
    header("Location: database.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>