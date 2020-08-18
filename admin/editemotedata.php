<?php 
require_once 'database.php';
if(isset($_POST['edite'])){
	$id2=$_GET['ide'];
	$head=$_POST['head'];
	$rarity=$_POST['rarity'];
	$type=$_POST['type'];
	$availability=$_POST['availability'];
	$link=$_POST['link'];
	
	/*$img=$_FILES['imge']['name'];	
	$imgtmpname=$_FILES['imge']['tmp_name'];
	$folder="skinimg/";
	move_uploaded_file($imgtmpname, $folder.$img);,
	img='".$img."'*/

	$sql="UPDATE emote SET header='".$head."',rarity='".$rarity."',type='".$type."',availability='".$availability."',link='".$link."' where id ='".$id2."'";
	$result=mysqli_query($conn,$sql);
	header("location:emoteadmin.php");
}
?>