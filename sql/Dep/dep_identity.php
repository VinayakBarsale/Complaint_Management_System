<!DOCTYPE html>
<html>
<head>
	<title>Admin or Student</title>
	<header>
		<h1 style="text-align: center; color: white">C H O O S E&nbsp;&nbsp;&nbsp; Y O U R&nbsp;&nbsp;&nbsp;  I D E N T I T Y</h1>
	</header>
	<style type="text/css">
		body{
		      background-image: url("mohammad-alizade-631039-unsplash.jpg");
		      background-size: 100%;
	    }
		 header{
			background-color: black;
			padding: 50px;
			margin: 0px;
			font-family: Tw Cen MT;
			filter: opacity(80%);
		}
		.stud{
			margin-top: 120px;
			background-color: black;
			padding: 10px;
			margin-right: 600px;
			border-radius: 0px 0px 250px;
			filter: opacity(70%);
		}
		.dmpc{
			margin-top: 60px;
			background-color: black;
			padding: 10px;
			margin-right: 600px;
			border-radius: 0px 0px 250px;
			filter: opacity(70%);
		}
		.hod:hover,.stud:hover,.dmpc:hover{
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
		}
		.hod{
			margin-top: 60px;
			background-color:/* #662b4c*/ black;
			padding: 10px;
			margin-left: 600px;
			border-radius: 150px 0px 0px;
			filter: opacity(70%);
		}
	</style>
</head>
<body>
	<a href="dep_complaint.php" style="text-decoration: none">
		<div class="stud">
			<p style="color: white; font-size: 30px; padding: 0px; font-family:alpaca scarlett demo;margin-left: 150px;" >Student</p>
		</div>
	</a>
	<a href="hod_login.php" style="text-decoration: none;">
		<div class="hod">
			<p style="color: white; font-size: 30px; padding: 0px;font-family:alpaca scarlett demo; margin-left: 150px;">HOD</p> 
		</div>	
	</a>
	<a href="dmpc_login.php" style="text-decoration: none;">
		<div class="dmpc">
			<p style="color: white; font-size: 30px; padding: 0px;font-family:alpaca scarlett demo; margin-left: 150px;">DMPC</p> 
		</div>	
	</a>		
</body>
</html>