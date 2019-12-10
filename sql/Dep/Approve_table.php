<!DOCTYPE html>
<html>
<title>Appoved Complaints</title>
<head>
	<header>
		<h1 style="text-align: center; color: white">All Appoved Complaints</h1>
	</header>
	<style type="text/css">
		header{
			background-color: black;
			filter: opacity(90%);
			padding: 20px;
		}

		
	</style>
</head>

<body>
      <div>
      	<p>  
      		<?php
      		session_start();
            $db = mysqli_connect('localhost','root','','ourproject');
            
            $sql = "SELECT * FROM dapproved";
            $records = mysqli_query($db,$sql);
            //$delete = "delete";
            //$hod = "HOD";
            //$Approve = "Approve";
     

            if(mysqli_num_rows($records) > 0)  
            {
            echo "<table id='a'>";
            echo "<tr>";
            echo "<th>"."Approve By"."</th>";
            echo "<th>"."Date"."</th>";
            echo "<th>"."Comp_id"."</th>";
            echo "<th>"."Name"."</th>";
            echo "<th>"."Registration No"."</th>";
            echo "<th>"."Subject"."</th>";
            echo "<th>"."Description"."</th>";
            //echo "<th colspan='2'>"."Action"."</th>";
            echo "</tr>";
           while($record = mysqli_fetch_assoc($records))
           {
            echo "<tr>";
            echo "<th>".$record['ApprovedBy']."</th>";
            echo "<th>".$record['Date_Time']."</th>";
            echo "<td>".$record['comp_id']."</td>";
            echo "<td>".$record['Name']."</td>";
            echo "<td>".$record['Reg_No']."</td>";
            echo "<td>".$record['Cmp_Category']."</td>";
            echo "<td>".$record['Cmp_desc']."</td>";
            //echo "<td>"."<a href='delete_hod.php?id=".$record['cmp_id']."'>".$delete."</a>"."</td>";
            //echo "<td>"."<a href='Approve_hod.php?id=".$record['cmp_id']."'>".$Approve."</a>"."</td>"; 
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