<?php
    include('../includes/connection.php');

  
 
    $name=$_POST['name'];
    $desig=$_POST['desig'];
    $city=$_POST['city'];
    $mobileno=$_POST['mobileno'];
    $pwd=$_POST['pwd'];
  
    $sql = "INSERT INTO `teacher`(`name`, `desig`, `city`, `mobileno`, `password`) VALUES ('$name','$desig','$city','$mobileno','$pwd')";
    if(mysqli_query($conn,$sql))
    {
        echo"insert successfully";
    }else{
        echo"failed";
    }
    

?>