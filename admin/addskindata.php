<?php 
require 'database.php';
if(isset($_POST['add'])){
	$head=$_POST['head'];
	$rarity=$_POST['rarity'];
	$type=$_POST['type'];
	$availability=$_POST['availability'];
	$categories=$_POST['categories'];
	$img=$_FILES['img']['name'];
	$imgtmpname=$_FILES['img']['tmp_name'];
	$folder="skinimg/";
	move_uploaded_file($imgtmpname, $folder.$img);

	$sql="INSERT INTO addskin(head,rarity,type,availability,categories,img)VALUES('$head','$rarity','$type','$availability','$categories','$img'	)";
	$result=mysqli_query($conn,$sql);
	if($result){
	header("location:skinadmin.php");
}

}


?>