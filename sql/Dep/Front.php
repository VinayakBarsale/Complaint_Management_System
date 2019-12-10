<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<header>
		<img src="MNNIT.png" width="200px" height="260px" style="float: left; margin: 0px;padding: 0px; position: absolute; top: 5%">
		<h1 style="text-align: center; color: white">M N N I T&nbsp;&nbsp;&nbsp; C O M P L A I N T&nbsp;&nbsp;&nbsp;  M A N A G E M E N T</h1>
	</header>
	<style type="text/css">
		body{
		      background-image: url("mohammad-alizade-631039-unsplash.jpg");
		      background-size: 100%;
	    }
		 header{
			background-color: black;
			padding: 100px;
			margin: 0px;
			font-family: Tw Cen MT;
			filter: opacity(80%);
		}
		/*img{
			margin-left: 530px;	
		}*/
		.hostel{
			margin-top: 120px;
			background-color: black;
			padding: 10px;
			margin-right: 600px;
			border-radius: 0px 0px 250px;
			filter: opacity(70%);
		}
		.hostel:hover,.dept:hover{
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
		}
		.dept{
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
	<a href="hostel_opt.php" style="text-decoration: none">
		<div class="hostel">
			<p style="color: white; font-size: 30px; padding: 0px; font-family:alpaca scarlett demo;margin-left: 150px;" >Complain related to Hostel</p>
		</div>
	</a>
	<a href="dep_identity.php" style="text-decoration: none">
		<div class="dept" >
			<p style="color: white; font-size: 30px; padding: 0px;font-family:alpaca scarlett demo; margin-left: 150px;">Complain related to Department</p>
		</div>
	</a>
</body>
</html>