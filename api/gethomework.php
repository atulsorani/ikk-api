
<?php 

 
include('../includes/connection.php');
 
 $mobileno = $_POST['mobileno'];
 
 //creating a query
 $stmt = $conn->prepare("SELECT date, homework FROM homework WHERE clss = (SELECT `class` FROM `stud` WHERE mobileno = '".$mobileno."')");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($date, $quotes);
 
 $quote = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['date'] = $date; 
 $temp['quotes'] = $quotes; 

 array_push($quote, $temp);
 }
 
 //displaying the result in json format 
 echo json_encode($quote);
 
?>