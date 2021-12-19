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
$sql = "SELECT * FROM employee";
//$result = mysqli_query($conn, $sql);
$result = $conn->query($sql);
$data=mysqli_fetch_all($result,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
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
    <h3>All students Details</h3>
    <a href="add_student.php"><button type="button" class="btn btn-info pull-right"><i class="fa fa-plus"></i>ADD students</button></a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>F_name</th>
        <th>L_name</th>
        <th>emp_id</th>
         <th>Salary</th>
         <th>Location</th>
      </tr>
    </thead>
    <tbody>
    	<?php
if ($result->num_rows > 0) {
  foreach ($data as  $value) {
    	?>
      <tr>
        <td><?php echo $value['f_name']; ?></td>
        <td><?=  $value['l_name']; ?></td>
        <td><?=  $value['emp_id']; ?></td>
        <td><?=  $value['salary']; ?></td>
        <td><?=  $value['location']; ?></td>
        <td><img src="image/<?= $value['image']; ?>" height='50px'></td>
        <td><a href="delete_student.php?id=<?php echo $value['emp_id'] ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
        <a href="show_details.php?id=<?php echo $value['emp_id'] ?>"><button type="button" class="btn btn-warning"><i class="fa fa-eye"></i> Show Details</button></a><a href="update.php?id=<?php echo $value['emp_id'] ?>"><button type="button" class="btn btn-warning"><i class="fa fa-eye"></i>Update</button></td></a>
      </tr>
 <?php
 }
  } ?>
    </tbody>
  </table>
</div>
<?php

$conn->close();

?>
</body>
</html>



