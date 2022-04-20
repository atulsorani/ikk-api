
<?php 

 
include('../includes/connection.php');

$mobileno = $_POST['mobileno'];
 
 //creating a query
 $stmt = $conn->prepare("SELECT `subjectnm`, `gdrlink` FROM `assignment` WHERE clss = (SELECT `class` FROM `stud` WHERE mobileno = '".$mobileno."') ");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($subnm, $grdlink);
 
 $assignment = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['subjectname'] = $subnm; 
 $temp['googlelink'] = $grdlink; 

 array_push($assignment, $temp);
 }
 
 //displaying the result in json format 
 echo json_encode($assignment);
 
?>