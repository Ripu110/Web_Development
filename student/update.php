<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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

// sql to update a record
$sql = "UPDATE employee SET emp_id='".$_GET['id']."'";

if ($conn->query($sql) === TRUE) {
    header("Location: database.php");//for redirection
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<div class="container">
  <h2>Update student</h2>
  <form action="#" method="post">
     <div class="form-group">
      <label for="name">f_name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
      <div class="form-group">
      <label for="name">l_name:</label>
      <input type="" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="emp_id">emp_id:</label>
      <input type="text" class="form-control" id="emp_id" placeholder="Enter emp_id" name="emp_id">
    </div>
    <div class="form-group">
      <label for="salary">salary:</label>
      <input type="salary" class="form-control" id="salary" placeholder="Enter salary" name="salary">
    <div class="form-group">
      <label for="location">location:</label>
      <input type="location" class="form-control" id="location" placeholder="Enter location" name="location">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
     <a href="database.php"><button type="button" class="btn btn-warning"><i class="fa fa-arrow"></i> Back</button></td></a>
  </form>
</div>
</body>
</html>