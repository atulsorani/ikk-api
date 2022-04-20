<?php
    include('../includes/connection.php');

    $img = $_POST['upload'];
	
	$filename="IMG".rand().".pdf";
	file_put_contents("images/".$filename,base64_decode($img));
  
    $sql = "INSERT INTO `image` (`image`) VALUES ('$filename') ";
    $res = mysqli_query($conn,$sql);
	if($res==true)
		echo "File Uploaded Successfully";
	else
		echo "Could not upload File";
    

?>
