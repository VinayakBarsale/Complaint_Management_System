<html>
<body>
	<?php
	       session_start();
            $db = mysqli_connect('localhost','root','','ourproject');
            $id =  $_GET["id"];
            $sql = "SELECT * FROM status WHERE cmp_id = '$id' ";
            $records =mysqli_query($db, $sql);
            $record = mysqli_fetch_assoc($records);
            $cname = $record['name'];
            $cregno = $record['regno'];
            $cdept = $record['dept'];
            $ccmp_category = $record['cmp_category'];
            $ccmp_id = $record['cmp_id'];
            $ccmp_desc = $record['cmp_desc'];
            $cdate = $record['Date_Time'];
            $date = date('Y-m-d H:i:s');
	?>
</body>
</html>
<form method="post">
<input type="text" name="id">
<!-- Trigger/Open The Modal -->
<button id="myBtn" name="submit">See Status</button>
</form>
<?php 
    	        if (isset($_POST['submit'])) 
    	         {
    	         	$id = $_POST['id'];
    	         	echo "$id";
    	         }
    	        
    	?>