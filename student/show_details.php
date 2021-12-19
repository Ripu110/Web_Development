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

$sql ="SELECT * FROM employee where emp_id='".$_GET['id']."' ";// $_Get['id'] id should be taken from url.

// $result = mysqli_query($conn, $sql);

$result = $conn->query($sql);

$data=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html >
<head>
  <title>student details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<div class="container">
			  <h3> student Details</h3>
					<table class="table table-user-information">
					    <tbody>
					      <tr>
					        <td>Name</td>
					        <td><?= $data['f_name']." ".$data['l_name'] ?></td>
					        <form action="/action_page.php">
  									<input type="file" id="myFile" name="filename">
 									 	<input type="submit">
									</form>
					      </tr>
					      <tr>
					        <td>Emp_id</td>
					        <td><?= $data['emp_id']?></td>
					      </tr>
					       <tr>
					        <td>Salary</td>
					        <td><?= $data['salary']?></td>
					      </tr>
					      <tr>
					        <td>location</td>
					        <td><?= $data['location']?></td>
					      </tr>
					   </tbody>
					  </table>
					  <a href="database.php"><button type="button" class="btn btn-warning"><i class="fa fa-arrow"></i> Back</button></td></a>
		</div>
  </body>
</html>


