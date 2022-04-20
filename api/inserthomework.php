<?php
    include('../includes/connection.php');

    $clsno = $_POST['clsno'];
    $date = $_POST['date'];
    $homework = $_POST['homework'];
  
    $sql = "INSERT INTO `homework` (`clss`,`date`,`homework`) VALUES ('$clsno','$date','$homework') ";
    mysqli_query($conn,$sql);
	echo "Homework Added Successfully";
    

?>