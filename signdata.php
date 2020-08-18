<?php 
require_once 'database.php';
if(isset($_POST['sign'])) {
	$uname=$_POST['username'];
	$pwd=$_POST['password'];
	$pwd=md5($pwd);
	$sql="SELECT * FROM userlist where username='".$uname."'AND password='".$pwd."' limit 1";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		header("location:index.php");
	}
	else{
	
	header("location:loginform.php");
	
	die();
	  
}

}
?>