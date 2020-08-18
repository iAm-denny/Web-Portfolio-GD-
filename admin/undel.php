<?php 
require_once 'database.php';

if(isset($_GET['undel'])){
	$del=$_GET['undel'];
	$sql="DELETE FROM usernews where id='".$del."'";
	$result=mysqli_query($conn,$sql);
	header("location:unews.php");
}
?>