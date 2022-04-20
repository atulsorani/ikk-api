<?php
    include('../includes/connection.php');

    $clss=$_POST['clss'];
    $subjectnm=$_POST['subjectnm'];
    $gdrlink=$_POST['gdrlink'];
	
	$filename="PDF".rand().".pdf";
	file_put_contents("docacc/".$filename,base64_decode($gdrlink));
  
    $sql = "INSERT INTO `assignment`(`clss`, `subjectnm`, `gdrlink`) VALUES ('$clss','$subjectnm','$filename')";
    mysqli_query($conn,$sql);
	echo "Assignment Add Successfully"   

?>

