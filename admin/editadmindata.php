<?php 
require_once 'database.php';
if(isset($_POST['edit'])){
	$id2=$_GET['id2'];
	$head=$_POST['head'];
	$rarity=$_POST['rarity'];
	$type=$_POST['type'];
	$availability=$_POST['availability'];
	$categories=$_POST['categories'];
	/*$img=$_FILES['imge']['name'];	
	$imgtmpname=$_FILES['imge']['tmp_name'];
	$folder="skinimg/";
	move_uploaded_file($imgtmpname, $folder.$img);,
	img='".$img."'*/

	$sql="UPDATE addskin SET head='".$head."',rarity='".$rarity."',type='".$type."',availability='".$availability."',categories='".$categories."' where id ='".$id2."'";
	$result=mysqli_query($conn,$sql);
	header("location:skinadmin.php");
}
?>