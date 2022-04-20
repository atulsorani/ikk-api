<?php 

 
include('../includes/connection.php');
 
 //creating a query
 $stmt = $conn->prepare("SELECT name, sugg FROM suggesion");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($name, $sugg);
 
 $suggestion = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['name'] = $name; 
 $temp['sugg'] = $sugg; 

 array_push($suggestion, $temp);
 }
 
 //displaying the result in json format 
 echo json_encode($suggestion);
 
?>