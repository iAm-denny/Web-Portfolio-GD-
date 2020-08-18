<?php 
require_once 'database.php';
if(isset($_POST['add'])){
	$head=$_POST['head'];
	$type=$_POST['type'];
	$rarity=$_POST['rarity'];
	$availability=$_POST['availability'];
	$link=$_POST['link'];
	$img=$_FILES['img']['name'];
	$imgtmpname=$_FILES['img']['tmp_name'];
	$folder="emoteimg/";
	move_uploaded_file($imgtmpname, $folder.$img);
	$sql="INSERT INTO emote(img,header,rarity,type,availability,link)VALUES('$img','$head','$rarity','$type','$availability','$link')";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("location:emoteadmin.php");
	}
}

?>