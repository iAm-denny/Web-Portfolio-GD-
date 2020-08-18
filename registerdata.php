<?php 
require_once 'database.php';
if(isset($_POST['create'])) {
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$pwd=md5($pwd);
	$sql="INSERT INTO userlist(username,email,password)VALUES('".$uname."','".$email."','".$pwd."')";
	$result =mysqli_query($conn,$sql);

	if($result){
		header("location:loginform.php");
	}
	
	else {
		
		header("location:register.php");
	}
}
?>