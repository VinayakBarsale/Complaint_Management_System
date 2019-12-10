<?php 
    session_start();
    $db = mysqli_connect('localhost','root','','ourproject');
    $username = $_SESSION['username'];
    
    $query = " SELECT Alloted_hostel FROM tech_login WHERE username = '$username'";
    $fetch = mysqli_query($db,$query);
    $row = mysqli_fetch_assoc($fetch);
    $ahostel = $row['Alloted_hostel'];

    $sql = "SELECT * FROM stu_details INNER JOIN hcomplaints ON hcomplaints.Comp_id = stu_details.Comp_id where Hostel_Name = '$ahostel'";
    $records = mysqli_query($db,$sql);
    
?>

<html>
<title>
</title>
<head>
  <style>
	#a {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    border: 0px ;
}

#a td, #a th {
    /*border: 1px solid #ddd;*/
    padding: 8px;
}

#a tr:nth-child(even){background-color: #f2f2f2;}

#a tr:hover {background-color: #ddd;}

#a th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

 </style>
</head>
<body>


<?php
     

   if(mysqli_num_rows($records) > 0)  
   {
   	echo "<table id='a'>";
    echo "<tr>";
     echo "<th>"."Comp_id"."</th>";
     echo "<th>"."Area"."</th>";
     echo "<th>"."Sub_Area"."</th>";
     echo "<th>"."Hostel Name"."</th>";
     echo "<th>"."Room no"."</th>";
    echo "</tr>";
    while($record = mysqli_fetch_assoc($records))
    {
      echo "<tr>";
      echo "<td>"."<a href='com_details.php?id=".$record['Comp_id']."'>".$record['Comp_id']."</a>"."</td>";
      echo "<td>".$record['Category']."</td>";
      echo "<td>".$record['Sub_Category']."</td>";
      echo "<td>".$record['Hostel_Name']."</td>";
      echo "<td>".$record['Room_No']."</td>";
      echo "</tr>";
    }
   }
   else
   {
   	  echo "No Data";
   }

 ?>

</body>
</html>
