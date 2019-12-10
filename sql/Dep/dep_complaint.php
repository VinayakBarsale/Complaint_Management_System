<?php include('dep_comp_server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Department Complaint</title>
	<header>
		<h1 style="text-align: center; color: white">R E G I S T E R&nbsp;&nbsp;&nbsp; Y O U R&nbsp;&nbsp;&nbsp;  C O M P L A I N T</h1>

	</header>
	<style type="text/css">
		body{
		      background-image: url("mohammad-alizade-631039-unsplash.jpg");
		      background-size: 100%;
	    }
	    .quote{
			background-color: black;
			filter: opacity(80%);
			width: 1000px;
			margin-top: 100px;
			position: absolute;
			text-align: center;
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
		}
	    h1{
			background-color: black;
			padding: 50px;
			font-family: Tw Cen MT;
			margin: 0px;
			filter: opacity(80%);
		}
		.box{
			width: 400px;
			height: 630px;
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
			font-family: helvetica;
			padding-bottom: 5px;
		}
		.box select{
			width: 100%;
			margin-bottom: 20px;
			padding: 10px;
		}
		.box button[type="submit"]{
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
			/*background: url("paint_art_stripes_stains_117030_1920x1080.jpg");*/
			background-size: 100%;
			width: 140px;
			position:absolute; 
			border: none;
			outline: none;
			right: 120px;
			padding: 20px;
			background: black;
			filter: opacity(80%);
			color: #fff;
			font-size: 18px;
			cursor: pointer;
			font-family: century gothic;
			font-weight: bold;
			border-radius: 30px;
		}
		.btn2{
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
			background-size: 100%;
			width: 140px;
			background: black;
			filter: opacity(80%);
			color: #fff;
			font-size: 18px;
			cursor: pointer;
			font-family: century gothic;
			font-weight: bold;
			border-radius: 30px;
			background: black;
			filter: opacity(80%);
			outline: none;
			float: left;
			margin-top:100px;
			padding: 10px;
			margin-left: 10px;
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
			height: 60px;
			color: black;
			padding: 1px;
			height: 50px;
			font-size: 16px;
		}
        .desc input[type="text"]{
           border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 100px;
			color: #fff;
			font-size: 16px;	
        } 
	</style>

	</style>
</head>
<body>
	<div class="quote">
		<p style="float: left;font-family: sans-serif; color: white; font-size: 16px;filter: opacity(70%);">Check Status</p>
		<form method="post" action="dep_complaint.php">
		<input type="text" name="reg" style="float: left;">
		<button type="submit" id="myBtn" class="btn2" name="proceed">Submit</button>
		</form>

		<p style="font-family: sans-serif; text-transform: uppercase;letter-spacing: 2px;-webkit-text-fill-color:transparent; -webkit-text-stroke-width:2px;  color: white; font-size: 40px;filter: opacity(70%);">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your&nbsp; demand <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is&nbsp; our&nbsp; priority.
		</p>
	</div>
<div class="box">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
			    $("form").submit(function(){
			        alert("Complain Registered");
			    });
			});
		</script>
		<form method="post" action="dep_complaint.php">
         
        <p>Student Enrollment ID:  </p>
        <input type="text" minlength="8" maxlength="8" name="regno" placeholder="Enter Reg. No." required style="background-color: white;border-radius: 15px;" > 
        <p>Student Name :</p>
		<input type="text" maxlength="20" name="name" placeholder="Enter Name" required style="background-color: white;border-radius: 15px;" >
		<p>Department: </p>
	  		<select name="dept" style="border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000;outline: none;">
                <option value="CSE" >Computer Science And Engineering</option>
		  		<option value="ECE" >Electronics And Communication Engineering</option>
		  		<option value="EEE" >Electronics And Electrical Engineering</option>
		  		<option value="MECH">Mechanical</option>
		  		<option value="CIV" >Civil</option>
             </select>
         <p>Complain Category: </p>
	  		<select name="category" style="border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000;outline: none;">
                <option value="Ragging" >Ragging</option>
		  		<option value="Attendence" >Attendence</option>
		  		<option value="Course" >Course</option>
		  		<option value="Teachers">Teachers</option>
		  		<option value="Canteen" >Canteen</option>
		  		<option value="Exam" >Exam</option>
		  		<option value="Others" >Others</option>		  		
             </select>
          <p>Complain Description: </p>
          <input type="text"  name="desc" placeholder="Enter Description Here" style="background-color: white;border-radius: 15px;" >
          <button type="submit" class="btn" name="proceed">Submit</button>       
		</form>
	</div>
</body>
</html>