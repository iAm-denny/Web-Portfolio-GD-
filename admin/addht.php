<!DOCTYPE html>
<html>
<head>
	<title>Add Harvesting Tools</title>
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
	.add{
		text-align: center;
		
		margin-bottom: 50px;
	}
	.add>input{
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
	</style>
</head>
<body>

	<form action="addhtdata.php" method="post" enctype="multipart/form-data" id="main">
		<div class="add">Header<input type="text" name="head" required></div>
		<div class="add">Type<input type="text" name="type" required></div>

		<div class="add">Rarity<input type="text" name="rarity" required></div>
		
		<div class="add">Availability <input type="text" name="availability" required></div>
		<div class="add">Images<input type="file" name="img" required></div>
		<div class="sub"><input type="submit" name="add" value="Add"></div>
	
	</form>
</body>
</html>