<?php 
require 'database.php';
if(isset($_GET['buyerdel'])){
	$del=$_GET['buyerdel'];
	$sql="DELETE from buyer where id='".$del."'";
	$result=mysqli_query($conn,$sql);
	header("location:buyer.php");
}
?>