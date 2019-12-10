<?php include('com_details_server.php') ?>
<?php include('errors.php') ?>
<?php
    $id = $_GET["id"];
    $db = mysqli_connect('localhost','root','','ourproject');
    $sql = "SELECT hcomplaints.Comp_id,Category,Sub_Category,Name,Room_No,Hostel_Name,Reg_No,Mobile,Description,Date_Time FROM stu_details INNER JOIN hcomplaints ON hcomplaints.Comp_id= stu_details.Comp_id WHERE hcomplaints.Comp_id = '$id' ";
    $result = mysqli_query($db,$sql);
    
?>

<html>
<body>
	
    	<?php
	   //while($row = mysqli_fetch_assoc($result))
	   //{
	   	$row = mysqli_fetch_assoc($result);
	   	  echo $row['Comp_id']."<br>";
	   	  echo $row['Date_Time']."<br>";
	   	  echo $row['Name']."<br>";
	   	  echo $row['Room_No']."<br>";
	   	  echo $row['Hostel_Name']."<br>";
	   	  echo $row['Mobile']."<br>";
          echo $row['Category']."<br>";
          echo $row['Sub_Category']."<br>";
          echo $row['Description']."<br>";
	   //}
	?>
    <form method="GET" action="com_details_server.php">
    
	<input type="text" name="regcheck">
	<?php
	$row = mysqli_fetch_assoc($result);
	//<a href="com_details_server.php?id='$row["Comp_id"]'">$record['Comp_id'] </a>
    ?>
    <button type="submit" class="btn" name="reg_check">done</button>
    </form>
    
    
	
</body>
</html>