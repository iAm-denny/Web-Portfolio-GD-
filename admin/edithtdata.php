<?php 
require_once 'database.php';
if(isset($_POST['edith'])){
	$id2=$_GET['idht'];
	$head=$_POST['head'];
	$rarity=$_POST['rarity'];
	$type=$_POST['type'];
	$availability=$_POST['availability'];
	
	/*$img=$_FILES['imge']['name'];	
	$imgtmpname=$_FILES['imge']['tmp_name'];
	$folder="skinimg/";
	move_uploaded_file($imgtmpname, $folder.$img);,
	img='".$img."'*/

	$sql="UPDATE ht SET header='".$head."',rarity='".$rarity."',type='".$type."',availability='".$availability."' where id ='".$id2."'";
	$result=mysqli_query($conn,$sql);
	header("location:htadmin.php");
}
?>