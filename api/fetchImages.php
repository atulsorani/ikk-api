
<?php 

 
include('../includes/connection.php');

 
 //creating a query
 $stmt = $conn->prepare("SELECT * FROM `image`");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($id, $image);
 
 $assignment = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['id'] = $id; 
 $temp['image'] = $image; 

 array_push($assignment, $temp);
 }
 
 //displaying the result in json format 
 echo json_encode($assignment);
 
?>