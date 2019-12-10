<?php
$date = "";
$category = "";
$description = "";
$pin="";
session_start();
$db = mysqli_connect('localhost', 'root', '', 'ourproject');
function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}	

if (isset($_POST['comp_sub'])){
	$date = date('Y-m-d H:i:s');
	$category = mysqli_real_escape_string($db, $_POST['category']);
	$subcategory = mysqli_real_escape_string($db, $_POST['sub_category']);
	$description = mysqli_real_escape_string($db, $_POST['description']);
	$pin = $_SESSION['pin'];

	if(mysqli_query($db,"INSERT INTO hcomplaints (Comp_id,Category,Sub_Category,description,Date_Time) 
   			VALUES('$pin','$category','$subcategory','$description','$date')")){
	header("Location:complaint.php");	
	exit();
	}
}
// $query = "INSERT INTO complaint (category,description) 
//   			  VALUES('$category','$description')";
//   	mysqli_query($db, $query);

?>