
<?php 

 
include('../includes/connection.php');
 
 //creating a query
 $stmt = $conn->prepare("SELECT name FROM state;");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($name);
 
 $state = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 
 $temp['name'] = $name; 

 array_push($state, $temp);
 }
 
 //displaying the result in json format 
 echo json_encode($state);
 
?>