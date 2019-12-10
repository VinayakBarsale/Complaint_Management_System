<?php
       session_start();
            $db = mysqli_connect('localhost','root','','ourproject');
            $id =  $_GET["id"];
            $date = date('Y-m-d H:i:s');
            $sql = "DELETE FROM hod_complaint WHERE cmp_id = '$id' ";
            mysqli_query($db, $sql);
            $sqll = "UPDATE status SET s = 'Delete By HOD' WHERE Comp_id = '$id' ";
            mysqli_query($db, $sqll);
            echo "<meta http-equiv='refresh' content='0;url=hod_table.php?id=Ragging'>";
             
?>