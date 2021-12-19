<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

  <input id="user_name">
<button onclick="ajaxCall()">show data</button>
<div id="show_div">
</div>
</body>
</html>


<script>
function ajaxCall(){
  var name=$("#user_name").val();
  if(name==""){
    alert('please fill this input field');
    return false;
  }
	  $.ajax({
        type: 'POST',
        url:  'form_show.php',
        dataType: 'json',
        data: {
        	'name':name,
        	'age' : 27
        },
        success: function (data) {
          html='';
          html+="<p>"+data.name+"</p>";
          $("#show_div").append(html);
					//	console.log("Response is " + data.name); 
						//alert(dt.name);
        },
        error: function (xhr, textStatus, error) {
                 alert(error.message);
        }
    });
}

</script>