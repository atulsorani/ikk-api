
<?php 

 
include('../includes/connection.php');
 
 //creating a query
 $stmt = $conn->prepare("SELECT title, date, description FROM notice;");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($title, $date, $description);
 
 $notice = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['title'] = $title; 
 $temp['date'] = $date; 
 $temp['description'] = $description; 

 array_push($notice, $temp);
 }
 
 //displaying the result in json format 
 echo json_encode($notice);
 
?>