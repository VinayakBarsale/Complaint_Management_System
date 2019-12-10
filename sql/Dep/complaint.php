<?php include('server.php') ?>
<html>
<head>
	<title></title>
	<header>
		<h1 style="text-align: center; color: white">R E G I S T E R&nbsp;&nbsp;&nbsp; Y O U R&nbsp;&nbsp;&nbsp;  C O M P L A I N T</h1>

	</header>
	<script>
		function populate(s1,s2){
			var s1 = document.getElementById(s1);
	        var s2 = document.getElementById(s2);
	        var optionArray;
	        s2.innerHTML = "";
		
		if(s1.value == "Civil")
		{
		optionArray = ["|","Window|Window","Door|Door","Furniture|Furniture","Wardrow|Wardorw"];
	    } 
	    else if(s1.value == "Electrical"){
		optionArray = ["|","Fan|Fan","Light|Light","Lan|Lan"];}
		for(var option in optionArray)
		{
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	    }
	}

	</script>
	<!-- <link rel="stylewsheet" type="text/css" href="complaint.css"> -->
	<style type="text/css">
		/*.header{
			background-color: white;
		}*/
		body{
      background-image: url("mohammad-alizade-631039-unsplash.jpg");
      background-size: 100%;
    }
		.quote{
			background-color: black;
			filter: opacity(80%);
			width: 1000px;
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
			width: 370px;
			height: 500px;
			background: transparent;
			color: #fff;
			top: 50%;
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
		.box input{
			margin-bottom: 20px;
			width: 100%;
		}
		.box input[type="text"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 100px;
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

		    transform: translate(-20%,-40%);
		}
		/*body{
			background-image: url("glares_spots_black_background_112859_3840x2160.jpg");
		}	*/
		}
	</style>
</head>
<body>
  	<br><br><br><br><br>
  	  	<!-- <video autoplay muted loop id="myVideo">
  			<source src="4k background footage (ideal for Blockchain Website) - YouTube.mkv" type="video/mp4">
		</video> -->

	<div class="quote">
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
  		<form method="post" action="complaint.php">
  			<p>Category:</p>
		  	<select id="category" name="category" onchange="populate(this.id,'sub_category')" required="Y" style="border-radius: 15px 50px 30px; box-shadow: inset 3px 4px 5px #000;outline: none;">

		  		<option value="Civil" >Civil</option>
		  		<option value="Electrical">Electrical</option>
		  	</select>
		  	<p>Sub Category</p>
		  	<select id = "sub_category" name="sub_category" required="Y" style="border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000;outline: none;"></select></select>
		  	<p>Description:</p>
		  	<input type="text" name="description" placeholder="Enter description" required="Y"
		  		style="background-color: white;border-radius: 15px;" >
  	  		<button type="submit" class="btn" name="comp_sub">Register</button>

		</form>	

  	</div>
</body>
</html>