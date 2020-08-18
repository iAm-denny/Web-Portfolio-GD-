<?php 
require 'database.php';
$id=$_GET['idh'];
$sql="SELECT * FROM ht where id='".$id."'";
$result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$img=$row['img'];
		$head=$row['header'];
		$rarity=$row['rarity'];
		$type=$row['type'];
		$availability=$row['availability'];

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style>
	#main {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		background: #1e272e;
		color: #ffa801;
		width: 500px;
		height: 500px;
		border-radius: 5px;
		font-size: 20px;
		font-weight: 800;
		padding: 30px 0 0 0;


	}
	.edit{
		text-align: center;
		
		margin-bottom: 50px;
	}
	.edit>input{
		width: 200px;
		height: 25px;
		background: #ffa801 ;
		outline: none;
		border:none;
		margin-left: 5px;
		border-radius: 5px;
		font-size: 18px;

	}
	.sub{
		text-align: center;
		transition: .2s ease;
	}
	.sub>input{

		text-decoration: center;
		width: 200px;
		height: 30px;
		background: #ffa801 ;
		border: none;
		transition: .2s ease;
		cursor: pointer;
		border-radius: 5px;
		font-size: 18px;
	}
	.sub:hover{

		background: #ffa801;
		color: #1e272e;
	}
	::placeholder {
	color:  #ffa801;
}
	</style>
</head>
<body>
	<form action="edithtdata.php?idht=<?php echo $id?>" method="post" id="main">
		
	
		<div class="edit">Head<input type="text" name="head" value="<?php echo $head ?>"></div>
		<div class="edit">Rarity<input type="text" name="rarity" value="<?php echo $rarity?>"></div>
		<div class="edit">Type<input type="text" name="type" value="<?php echo $type?>"></div>
		<div class="edit">Availability<input type="text" name="availability" value="<?php echo $availability?>"></div>
		
		<!--<div>Images<input type="file" name="imge" value="<?php echo $img?>"></div>-->
		<div class="sub"><input type="submit" name="edith" value="Edit"></div>
		
	</form>
</body>
</html>