<!DOCTYPE html>
<html>
<title>DMPC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<head>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Categories</h3>
  <!--<a href='com_details.php?id=".$record['Comp_id']."'>".$record['Comp_id']."</a>".-->
  <a href="dudmpc_table.php?id=Ragging" class="w3-bar-item w3-button">Ragging</a>
  <a href="dudmpc_table.php?id=Attendence" class="w3-bar-item w3-button">Attendence</a>
  <a href="dudmpc_table.php?id=Teachers" class="w3-bar-item w3-button">Teachers</a>
  <a href="dudmpc_table.php?id=Canteen" class="w3-bar-item w3-button">Canteen</a>
  <a href="dudmpc_table.php?id=Course" class="w3-bar-item w3-button">Course</a>
  <a href="dudmpc_table.php?id=Exam" class="w3-bar-item w3-button">Exam</a>
  <a href="dudmpc_table.php?id=Others" class="w3-bar-item w3-button">Others</a>
</div>
</div>

<!-- Page Content -->
<div style="margin-left:25%">
<div class="w3-container w3-teal">
  <h1>DMPC view</h1>
</div>
      
<div class="abc">
	<p>
		<?php
            session_start();
            $db = mysqli_connect('localhost','root','','ourproject');
            $id =  $_GET["id"];
            $sql = "SELECT * FROM dept_complaint_details where cmp_category = '$id'" ;
            $records = mysqli_query($db,$sql);
            $delete = "delete";
            $hod = "HOD";
            $a = "Approve";
     

            if(mysqli_num_rows($records) > 0)  
            {
            echo "<table id='a'>";
            echo "<tr>";
            echo "<th>"."Comp_id"."</th>";
            echo "<th>"."Name"."</th>";
            echo "<th>"."Registration No"."</th>";
            echo "<th>"."Description"."</th>";
            echo "<th colspan='2'>"."Action"."</th>";
            echo "</tr>";
           while($record = mysqli_fetch_assoc($records))
           {
            echo "<tr>";
            echo "<td>".$record['cmp_id']."</td>";
            echo "<td>".$record['name']."</td>";
            echo "<td>".$record['regno']."</td>";
            echo "<td>".$record['cmp_desc']."</td>";
            echo "<td>"."<a href='delete_dmpc.php?id=".$record['cmp_id']."'>".$delete."</a>"."</td>";
            echo "<td>"."<a href='insert_hod.php?id=".$record['cmp_id']."'>".$hod."</a>"."</td>"; 
            echo "<td>"."<a href='Approve_dmpc.php?id=".$record['cmp_id']."'>".$a."</a>"."</td>"; 
            echo "</tr>";
            }
            }
            else
            {
             echo "No Data";
             }
            ?>
	</p>
</div>
</body>
</html>