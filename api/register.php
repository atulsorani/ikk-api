<?php
    include('../includes/connection.php');

  
 
    $mobileno = $_POST['mobileno'];	
    $passw = $_POST['passw'];
  
    $sql = "SELECT * FROM `stud` WHERE mobileno='$mobileno'";	
	$raw = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($raw);
	
    
	if($count>0)
    {
        $sql1 = "SELECT * FROM `studregister` WHERE usernm='$mobileno'";	
		$raw = mysqli_query($conn,$sql1);
		$count = mysqli_num_rows($raw);
		
		
		if($count>0)
		{			
			echo"You Have Already Have An Account.\n Please Login";
			
		}
		else
		{
			
			$sql = "INSERT INTO studregister (`usernm`,`passwrd`) VALUES ('$mobileno','$passw') ";
			if(mysqli_query($conn,$sql))
			{
				echo"Register successfully";
			}
			else{
				echo"failed";
			}
		}
    }
	else
	{
        echo"Number Not Found";
    }
    

?>