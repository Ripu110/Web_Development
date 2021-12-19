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
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if($_POST["f_name"]==''&& $_POST["l_name"]==''&& $_POST["emp_id"]==''&& $_POST["salary"]==''&&$_POST["location"]==''){
		header("Location: database.php");
	}
		$f_name = $_POST["f_name"];
		$l_name = $_POST["l_name"];
		$emp_id = $_POST["emp_id"];
		$salary=$_POST["salary"];
		$location=$_POST["location"];
		$image =$_FILES['image']['name'];
		$temp = $_FILES['image']['tmp_name'];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "student";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connectionstudent
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		 $sql = "INSERT INTO employee (f_name,l_name,emp_id,salary,location) VALUES ('".$f_name."', '".$l_name."','".$emp_id."','".$salary."',  '".$location."')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		    header("Location: database.php");

		} else {
			echo "internal server error";
		}

}

?>
<div class="container">
  <h2>Add student</h2>
  <form action="#" method="post" enctype="multipart/form-data">
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
    <div class="form-group">
      <label for="location">Image:</label>
      <input type="location" class="form-control" id="location" placeholder="Enter location" name="location">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
     <a href="database.php"><button type="button" class="btn btn-warning"><i class="fa fa-arrow"></i> Back</button></td></a>
  </form>
</div>
</body>
</html>
