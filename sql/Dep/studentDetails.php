<?php include('studentServer.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<header>
		<h1 style="text-align: center; color: white">E N T E R&nbsp;&nbsp;&nbsp; Y O U R&nbsp;&nbsp;&nbsp;  D E T A I L S</h1>
	</header>
	<style type="text/css">
		h1{
			background-color: black;
			padding: 50px;
			font-family: Tw Cen MT;
			margin: 0px;
			filter: opacity(80%);

		}
		.box{
			width: 400px;
			height: 650px;
			background: transparent;
			color: #fff;
			top: 56%;
			left: 80%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 70px 30px;
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
		}

		.box p{
			margin: 0;
			padding: 0;
			font-size: 20px;
			font-family: cleanwork;
			padding-bottom: 5px;
		}
		.box select{
			width: 100%;
			margin-bottom: 20px;
			padding: 10px;
		}
		.box button[type="submit"]{
			box-shadow: 2px 10px 20px 5px rgba(0, 0, 0, .7);
			width: 200px;
			height: 50px;
			position:fixed; 
			border: none;
			outline: none;
			right: 100px; 
			padding: 0px;
			text-align: center;
			background: black;
			color: #fff;
			font-size: 15px;
			filter: opacity(80%);
			cursor: pointer;
			bottom: 30px;
			font-family: century gothic;
			font-weight: bold;
			border-radius: 30px;
			
		}
		.box input{
			margin-bottom: 20px;
			width: 100%;
		}
		.box input[type="text"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 5px;
			width: 270px;
			color: black;
			font-size: 16px;
			padding: 20px;
		}
		 #myVideo {
		    position: fixed;
		    filter: opacity(95%);
		    z-index: -1000;
		    min-height: 100%;
		    min-width: 100%;
		    bottom:-500px;
		    transform: translate(-20%,-40%);
		}
	</style>
</head>
<body>
	<video autoplay muted loop id="myVideo">
		<source src="4k background footage (ideal for Blockchain Website) - YouTube.mkv" type="video/mp4">
	</video>

	<div class="box">
		<script type="text/javascript">
			function mess(argument) {
				alert("Complain Registered");
				// body...
			}
		</script>
		<form method="post" action="studentDetails.php">

			<p>Hostel Name: </p>
	  		<select name="hostel">

		  		<option value="Tilak" >Tilak</option>
		  		<option value="Malviya">Malviya</option>
		  		<option value="Tondon" >Tondon</option>
		  		<option value="Patel" >Patel</option>
		  	</select>

		  	<p>Room No. :</p>
		  	<input type="text" name="room" minlength="1" maxlength="3" placeholder="Room No." required  style="border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000; background-color: white;color: black;">
		  	<p>Name :</p>
		  	<input type="text" maxlength="20" name="name" placeholder="Enter Name" required style="border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000; background-color: white;color: black;">
		  	<p>Registration No.</p>
		  	<input type="text" minlength="8" maxlength="8" name="regno" placeholder="Enter Reg. No." required style="background-color: white;border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000;">
		  	<p>Mobile Number</p>
		  	<input type="text" minlength="10" maxlength="10" name="mobile" placeholder="Enter Mobile No." required style="background-color: white;border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000;">

	  		<button type="submit" class="btn" name="proceed" ">PROCEED</button>
		</form>
	</div>
</body>
</html>