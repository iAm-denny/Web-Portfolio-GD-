<?php 
require_once 'database.php';
if(isset($_POST['add'])){
	$head=$_POST['head'];
	$type=$_POST['type'];
	$rarity=$_POST['rarity'];
	$availability=$_POST['availability'];
	$img=$_FILES['img']['name'];
	$imgtmpname=$_FILES['img']['tmp_name'];
	$folder="htimg/";
	move_uploaded_file($imgtmpname, $folder.$img);
	$sql="INSERT INTO ht(img,header,type,rarity,availability)VALUES('$img','$head','$type','$rarity','$availability')";
	$result=mysqli_query($conn,$sql);

	if($result){
		header("location:htadmin.php");
	}
	
}
?>