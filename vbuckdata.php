<?php 
require_once 'database.php';
if(isset($_POST['buy'])){
	$epicname=$_POST['epicid'];
	$gname=$_POST['gname'];
	$uname=$_POST['uname'];
	$price=$_POST['price'];
	$pay=$_POST['pay'];
	$email=$_POST['email'];
	
	$sql="INSERT INTO buyer(epicname,gname,urname ,amount,payment,email)VALUES('".$epicname."','".$gname."','".$uname."','".$price."','".$pay."','".$email."')";
	$result=mysqli_query($conn,$sql);
	sleep(3);
	header("location:vbuck.php");
}
?>
