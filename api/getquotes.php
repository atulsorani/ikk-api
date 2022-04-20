
<?php 

 
include('../includes/connection.php');
 
 //creating a query
 $stmt = $conn->prepare("SELECT date, image,quotes FROM quotes;");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($date, $image, $quotes);
 
 $quote = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['date'] = $date; 
 $temp['quotes'] = $image;
 $temp['desc'] = $quotes;

 array_push($quote, $temp);
 }
 
 //displaying the result in json format 
 echo json_encode($quote);
 
?>