<?php
    include('../includes/connection.php');

    $title=$_POST['title'];
    $date=$_POST['date'];
    $description=$_POST['description'];
  
    $sql = "INSERT INTO `notice` (`title`,`date`,`description`) VALUES ('$title','$date','$description') ";
    mysqli_query($conn,$sql);
	echo "Notice added Successfully";
    

?>