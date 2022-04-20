<?php
    include('../includes/connection.php');
 
    $mobileno = $_POST['mobileno'];

	$stmt = $conn->prepare("SELECT name, class FROM `stud` WHERE mobileno = '".$mobileno."' ");
 
		 //executing the query 
		 $stmt->execute();
		 
		 //binding results to the query 
		 $stmt->bind_result($name, $class);
		 
		 $detais = array(); 
		 
		 //traversing through all the result 
		 while($stmt->fetch()){
		 $temp = array();
		 $temp['name'] = $name; 
		 $temp['class'] = $class; 

		 array_push($detais, $temp);
		 }
		 
		 //displaying the result in json format 
		 echo json_encode($detais);
    
    

?>