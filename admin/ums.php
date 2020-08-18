<?php 
require_once 'database.php';
if(isset($_GET['umsdel'])){
	$del=$_GET['umsdel'];
	$sql="DELETE FROM usermessage where id='".$del."'";
	$result=mysqli_query($conn,$sql);
	header("location:usermessage.php");
}
?>