<?php
    include('../includes/connection.php');

    $name=$_POST['name'];
    $sugg=$_POST['sugg'];
  
    $sql = "INSERT INTO `suggesion` (`name`,`sugg`) VALUES ('$name','$sugg')";
    mysqli_query($conn,$sql);
	
	echo "Suggestion Added Successfully";
    

?>