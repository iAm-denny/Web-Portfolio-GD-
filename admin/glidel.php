<?php 
require_once 'database.php';
if(isset($_GET['delg'])){
	$del=$_GET['delg'];
	$sql="DELETE FROM gli where id='".$del."'";
	$result=mysqli_query($conn,$sql);
	header("location:gliadmin.php");
}
?>