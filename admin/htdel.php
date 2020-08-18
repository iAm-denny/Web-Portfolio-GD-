<?php 
require_once 'database.php';
if(isset($_GET['delh'])){
	$del=$_GET['delh'];
	$sql="DELETE FROM ht where id='".$del."'";
	$result=mysqli_query($conn,$sql);
	header("location:htadmin.php");
}
?>