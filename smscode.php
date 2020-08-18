<?php 
require_once 'database.php';
if(isset($_POST['send'])){
	$msg=$_POST['msg'];
	$sql="INSERT INTO usermessage(message) VALUES ('".$msg."')";
	$result =mysqli_query($conn,$sql);
	sleep(5);
	header("location:index.php");
}
?>