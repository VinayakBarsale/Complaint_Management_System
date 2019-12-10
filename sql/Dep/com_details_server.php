
<?php
$errors=array();
session_start();
$db = mysqli_connect('localhost', 'root', '', 'ourproject');
     if (isset($_POST['reg_check']))
     { 
	 	   $regno = mysqli_real_escape_string($db, $_POST['regcheck']); 
       $id = $_GET["id"];
   
   if (empty($regno)) {
    array_push($errors, "Registration number varification Required");
    header('Location:com_details.php');

  }
  if (count($errors) == 0)
  {
    $query = "SELECT Reg_No FROM stu_details WHERE Comp_id='$id' ";
    $results = mysqli_query($db, $query);
    $fetchid = mysqli_fetch_assoc($results);
    $Real_regno = $fetchid['Reg_No'];
    if (mysqli_num_rows($results) == 1 && $regno == $Real_regno) {
      //$_SESSION['username'] = $username;
      //$_SESSION['id'] = $password;
      //$_SESSION['success'] = "You are now logged in";
      echo "matched";
      header("location: com_details.php");
    }
    else {
      array_push($errors, "Not match");
            header('Location:com_details.php');
    }
  }
}
  


	 	

    
?>