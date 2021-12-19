<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>webpage</title>
	<!-- <link rel="stylesheet" type="text/css" href=""> -->
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}
		ul{
			list-style-type: none;
			overflow: hidden;
			background-color: black;
		}
		li{
			float: left;
		}
		li a{
			font-size: 15px;
			display: block;
			color: white;
			text-align: center;
			padding: 15px 17px;
			text-decoration: none;
		}
		li a:hover{
			background-color: red;
		}
		.abc .dec p{ /*parent class(.abc) then child class(.dec) then p tag */
			color: blueviolet;
		}
		.dec p{
			color: greenyellow;
		}
	</style>
</head>
<body>
	<div class="header">
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Category</a></li>
			<li><a href="">About Blog</a></li>
			<li><a href="">Contact Us</a></li>
		</ul>
	</div>
	<div class="abc">
		<div class="dec">
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus impedit consequuntur animi quas iusto quos. Voluptatibus rerum expedita, cum cupiditate id, porro natus quidem laboriosam ullam cumque adipisci tempore eius.</p>
		</div>
	</div>
	<div class="dec">
		<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Commodi delectus, necessitatibus quam nulla, laudantium incidunt, amet nobis sit voluptates in ducimus sint dolorem vel quod accusamus sapiente optio doloribus perferendis?</p>
	</div>
</body>
</html>