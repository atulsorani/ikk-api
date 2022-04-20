<?php
    include('../includes/connection.php');

    $date=$_POST['date'];
    $image=$_POST['image'];
    $quotes=$_POST['quotes'];
	
	$filename="IMG".rand().".jpg";
	file_put_contents("images/".$filename,base64_decode($image));
  
    $sql = "INSERT INTO `quotes` (`date`,`image`,`quotes`) VALUES ('$date','$filename','$quotes') ";
    mysqli_query($conn,$sql);
	echo "Quotes Add Successfully";
    

?>