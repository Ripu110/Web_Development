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

<form onsubmit="return checkRegistration()" method="post" action="form2.php">
    Write google to go to google..<br/>
    <input type="text" id="some_input" name="name" />
    <button type="submit">submit</button>
</form>
</body>
<style>
.error{
    border:1px solid red;
}
.success{
    border:1px solid green;
}
</style>
</html>

<script>
function checkRegistration(){
  var name= $("#some_input").val();
  if(name==''){
    $("#some_input").addClass("error");
    //("please fill this field");
    return false;
  }else{
     $("#some_input").removeClass("error");
    $("#some_input").addClass("success");
  }
  return true;
}

</script>

