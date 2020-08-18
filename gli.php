<?php 
require_once 'database.php';
$sql="SELECT * FROM gli";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gliders List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="skincode.css">
	<link rel="stylesheet" type="text/css" href="glicode.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div id="upar" onscroll="up()"><a href="#"><i class="fas fa-arrow-up"></i></a></div>
<div id="navbar">
		 <span id="spa">GD </span>
		 
	<ul id="nav">
			<li id="navlist1"><a href="index.php"><i class="fas fa-home"></i></a></li>
			<li id="navlist1"><a href="vbuck.php"><i class="fas fa-shopping-cart"></i></a></li>
			<li id="navlist2"><a href="skin.php"><i class="fas fa-tshirt"></i></a></li>
			<li id="navlist3"><a href="loginform.php"><i class="fas fa-sign-out-alt"></i></a></li>

		</ul>
		<ul id="social">



			<li id="solist1"><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" target="_blank"></i></a></li>
			
			<li id="solist2"><a href="https://www.vk.com/" target="_blank"><i class="fab fa-vk"></i></a></li>

			<li id="solist3"><a href="https://www.skype.com/" target="_blank"><i class="fab fa-skype"></i></a></li>

			<li id="solist4"><a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>	
		</ul>
	</div>

	<!--<div class="nav">
		<div id="skin"><a href="skin.php">Skin List</a></div>
		<div id="ht"><a href="ht.php"> Harvesting Tools</a></div>
		<div id="gli"><a href="gli.php"> Gliders</a></div>
		<div id="emote"><a href="emote.php"> Emote</a></div>
	</div>-->

	<ul class="nav">
		<li><a href="skin.php">Skin List</a></li>
		<li><a href="ht.php"> Harvesting Tools</a></li>
		<li><a href="gli.php"> Gliders</a></li>
		<li><a href="emote.php"> Emote</a></li>
	</ul>

	<!--//////////////////////////////////////////////////-->
		<div class="container">
	<?php while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$img=$row['img'];
		$head=$row['header'];
		$rarity=$row['rarity'];
		$type=$row['type'];
		$availability=$row['availability'];
		
	?>
	<div class="row" id="main">
		<div class="col-lg-4 p-3" align="center" id="li1">
			<img src="admin/gliimg/<?php echo $img;?>" width="220px" height="220px" id="img">
		
		</div>
		<div class="col-lg-4" id="intro" align="center" >
			<h2 id="li1"><?php echo $head ?></h2>
			<ul  id="li1">
			<li>Rarity:&nbsp&nbsp<?php echo $rarity?></li>
			<li>Type:&nbsp&nbsp<?php echo $type?></li>
			<li>Availability:&nbsp&nbsp<?php echo $availability?></li>
			
			

			
			</ul>
		</div>
		<div class="col-lg-4" align="center" id="li2">
					<div id="buy">
				<a href="shop3.php?gli=<?php echo $id?>" >Buy V-Buck</a>
					</div>
				</div>
	</div>

	<?php
}
	 ?>
	
</div>


<!--//////////////////////////////////////////////////-->
			<div class="container-fluid">
					<div class="row" id="fooTer">
						<div class="col-lg-6" id="hq">
							<h4 align="center">
							Contact Us
							<div id="fl" align="center"></div>
							</h4>

							<ul id="fh">
								<li><i class="fas fa-phone-square-alt"></i>
								&nbsp 09-123456879</li>
								<li><i class="fas fa-phone-square-alt"></i>
								&nbsp 09-123456879</li>
								<li><i class="fas fa-phone-square-alt"></i>
								&nbsp 09-123456879</li>
								<li><i class="fas fa-phone-square-alt"></i>
								&nbsp 09-123456879</li>
							</ul>
					</div>
						<div class="col-lg-6" id="hq" >
							<h4 align="center">
							Our Address
							<div id="fl" align="center"></div>
							</h4>
						
						<ul id="fh">
								<li><i class="fas fa-home"></i> &nbsp 09-123456879</li>
								<li><i class="fas fa-home"></i> &nbsp 09-123456879</li>
								<li><i class="fas fa-home"></i> &nbsp 09-123456879</li>
								<li><i class="fas fa-home"></i> &nbsp 09-123456879</li>
							</ul>
							</div>
					</div>
			<div class="row" id="fooTer">
				<div class="col-lg-12" id="fb">
					Copy All Right Reserved
				</div>
			</div>
				


			</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>