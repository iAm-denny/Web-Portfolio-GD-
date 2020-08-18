<?php 

if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
		if($uname=="admin" && $pwd=="ADMIN") {
			header("location:index.php");
		} 
		else 
		{
			header("location:login.php");
		}
}
?>