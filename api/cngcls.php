<?php 
 
include('../includes/connection.php');
 
 //creating a query
 $stmt = $conn->prepare("UPDATE `stud` SET `class` = class + 1");
 $stmtm = $conn->prepare("UPDATE `stud` SET `class` = 20 WHERE class > 12");
 
 //executing the query 
 $stmt->execute();
 $stmtm->execute();
 
 ?>