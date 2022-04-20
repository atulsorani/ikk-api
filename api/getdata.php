<?php
 include('../includes/connection.php');

    $sql="SELECT * FROM quarys";
    $rs=mysqli_query($conn,$sql);

    $response=array();
    $temp_arr=array();
    $count=0;
    if(mysqli_num_rows($rs)>0){

        while($rw=mysqli_fetch_assoc($rs)){
            $temp_arr[$count++]=$rw;
        }
    }else{

        echo "No data";
    }

    $response['student_arr']=$temp_arr;
    echo json_encode($response);

?>