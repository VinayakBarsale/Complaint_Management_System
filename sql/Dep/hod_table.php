<!DOCTYPE html>
<html>
<title>HOD view</title>
<head>
	<header>
		<h1 style="text-align: center; color: white">HOD View</h1>
	</header>
	<style type="text/css">
		header{
			background-color: black;
			filter: opacity(90%);
			padding: 30px;
		}

		
	</style>
</head>

<body>
      <div>
        <a href="Approve_table.php">All approved complaints</a>
      	<p>  
      		<?php
      		session_start();
            $db = mysqli_connect('localhost','root','','ourproject');
            
            $sql = "SELECT * FROM hod_complaint";
            $records = mysqli_query($db,$sql);
            $delete = "delete";
            $hod = "HOD";
            $Approve = "Approve";
     

            if(mysqli_num_rows($records) > 0)  
            {
            echo "<table id='a'>";
            echo "<tr>";
            echo "<th>"."Comp_id"."</th>";
            echo "<th>"."Name"."</th>";
            echo "<th>"."Registration No"."</th>";
            echo "<th>"."Subject"."</th>";
            echo "<th>"."Description"."</th>";
            echo "<th colspan='2'>"."Action"."</th>";
            echo "</tr>";
           while($record = mysqli_fetch_assoc($records))
           {
            echo "<tr>";
            echo "<td>".$record['cmp_id']."</td>";
            echo "<td>".$record['name']."</td>";
            echo "<td>".$record['regno']."</td>";
            echo "<td>".$record['cmp_category']."</td>";
            echo "<td>".$record['cmp_desc']."</td>";
            echo "<td>"."<a href='delete_hod.php?id=".$record['cmp_id']."'>".$delete."</a>"."</td>";
            echo "<td>"."<a href='Approve_hod.php?id=".$record['cmp_id']."'>".$Approve."</a>"."</td>"; 
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