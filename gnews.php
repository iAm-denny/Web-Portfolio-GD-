<?php 
require_once 'database.php';
if(isset($_POST['geT'])) {
	$email=$_POST['email'];
	$sql="INSERT INTO usernews(email) VALUES ('".$email."')";
	$result=mysqli_query($conn,$sql);
	sleep(5);
	header("location:index.php");
}
?>