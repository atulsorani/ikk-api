<?php
    include('../includes/connection.php');

    $clss=$_POST['clss'];
    $subjectnm=$_POST['subjectnm'];
    $gdrlink=$_POST['gdrlink'];
  
	$filename="PDF".rand().".pdf";
	file_put_contents("doc/".$filename,base64_decode($gdrlink));
  
    $sql = "INSERT INTO `maretial`(`clss`, `subjectnm`, `gdrlink`) VALUES ('$clss','$subjectnm','$filename')";
    mysqli_query($conn,$sql);
	echo "Material Add Successfully"   

?>