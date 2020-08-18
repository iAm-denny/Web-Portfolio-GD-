<?php 
require_once 'database.php';
if(isset($_GET['dele'])){
	$del=$_GET['dele'];
	$sql="DELETE FROM emote where id='".$del."'";
	$result=mysqli_query($conn,$sql);
	header("location:emoteadmin.php");
}
?>