<?php
    include('../includes/connection.php');

  
 
    $mobileno = $_POST['mobileno'];	
    $passw = $_POST['passw'];

    $sql = "SELECT * FROM `studregister` WHERE usernm='".$mobileno."' AND passwrd='".$passw."'";	
	$result = mysqli_query($conn,$sql);	
	
    
	if($data = mysqli_fetch_array($result))
    {
		echo '1';	
	}
	else
	{
       echo '0';
    }
    

?>