<?php 
require_once 'database.php';
if(isset($_POST['add'])){
	$head=$_POST['head'];
	$type=$_POST['type'];
	$rarity=$_POST['rarity'];
	$availability=$_POST['availability'];
	$img=$_FILES['img']['name'];
	$imgtmpname=$_FILES['img']['tmp_name'];
	$folder="gliimg/";
	move_uploaded_file($imgtmpname, $folder.$img);
	$sql="INSERT INTO gli(img,header,rarity,type,availability)VALUES('$img','$head','$rarity','$type','$availability')";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("location:gliadmin.php");
	}
}

?>