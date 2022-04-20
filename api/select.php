<?php 
include('../includes/connection.php');
 
 //creating a query
 $stmt = $conn->prepare("SELECT * from `stud`");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($id, $name, $clas, $city, $mobileno, $parentmbo);
 
 $quote = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['name'] = $name; 
 $temp['clas'] = $clas;
 $temp['city'] = $city;
 $temp['mobileno'] = $mobileno;
 $temp['parentmbo'] = $parentmbo;

 //array_push($quote, $temp);
 }
 
 //displaying the result in json format 
 echo json_encode($temp);
 
?>