<?php
	include('../includes/connection.php');

	$data=json_decode(file_get_contents('php://input'),true);

	$response=array();

	$name=$_POST['name'];
	$class=$_POST['clas'];
	$city=$_POST['city'];
	$mobileno=$_POST['mobileno'];
	$parentmbo=$_POST['parentmbo'];
	
	$query="INSERT INTO `stud`(`id`, `name`, `class`, `city`, `mobileno`, `parentsmbo`) VALUES (NULL,'$name','$class','$city','$mobileno','$parentmbo')";
	$res=mysqli_query($conn,$query);
// 	$row=mysqli_fetch_array($res);
    $status=mysqli_affected_rows($conn);
// 	echo $status;
// 	 $row=mysqli_fetch_array($res);
	 if($status>=1)
	{
// 		echo $status;
	    $data1['status']=$status;
		array_push($response,$data);
	    echo json_encode($data1);
	}
	else
	{
		$data1['id']="";
		$data1['name']="";
		$data1['pass']="";
		$data1['cno']="";
		echo json_encode($data1);
	}


?>