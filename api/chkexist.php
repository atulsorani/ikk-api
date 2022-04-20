<?php
error_reporting(0);
if ($_SERVER[‘REQUEST_METHOD’] == ‘GET’) {
include(“../connect/init.php”);
if (isset($_GET[‘username’]) && isset($_GET[‘password’])){
// username and password sent from link
$myusername = $_GET[‘username’];
$mypassword = $_GET[‘password’];
$query = “SELECT * FROM users WHERE username = ‘$myusername’ and password = ‘$mypassword’”;
$result = mysqli_query($connection, $query);
$data = mysqli_num_rows($result);
if($data>0) {
$error=”ok”;
echo json_encode(array(“response”=>$error,”name”=>$myusername));
}else {
$error = “failed”;
echo json_encode(array(“response”=>$error));
}
}
}
mysqli_close($connection);
?>