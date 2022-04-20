<?php 

    include('../includes/connection.php');

       
    $cap_id=$_REQUEST['cap_id'];
    $cap_name=$_REQUEST['cap_name'];
    $cap_phone=$_REQUEST['cap_phone'];
    $cap_email=$_REQUEST['cap_email'];

    $sql = "UPDATE quarys SET cap_name='".$cap_name."',cap_phone='".$cap_phone."',cap_email='".$cap_email."'
    WHERE cap_id='".$cap_id."'";
    if(mysqli_query($conn,$sql)){
        echo "updated successfully...";
    }else{
        echo "failed";
    }

?>