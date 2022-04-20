<?php
    include('../includes/connection.php');
 
    $name="sdfsf";
    $class="6";
    $city="rajkot";
    $mobileno="9623123";
    $perentsmbo="5464654";
  
    $sql = "INSERT INTO `stud`(`id`, `name`, `class`, `city`, `mobileno`, `parentsmbo`) VALUES (NULL,'$name','$class','$city','$mobileno','$perentsmbo')";
    if(mysqli_query($conn,$sql))
    {
        echo ("Insert Successfully");
    }else{
		echo ("Insert Faild");
    }
?>