
<?php 
require 'database.php';
$sql="SELECT * FROM emote";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Skin List</title>
	<link rel="stylesheet" type="text/css" href="ustylec.css">
	<link rel="stylesheet" type="text/css" href="skincodeadmin.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
</head>
<body>
	<div class="pos-f-t" id="navS">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <a href="usermessage.php" id="nav">User sent Messages</a>
      <a href="unews.php" id="nav">User Who want News</a>
      <a href="buyer.php" id="nav">Buyer List</a>
      <a href="skinadmin.php" id="nav">Skin </a>
    <a href="login.php" id="nav">Log Out</a>
    
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" id="ti"></span>
    </button>
  </nav>
</div>
<div id="upar" onscroll="up()"><a href="#"><i class="fas fa-arrow-up"></i></a></div>


	<!--<div class="nav">
		<div id="skin"><a href="skin.php">Skin List</a></div>
		<div id="ht"><a href="ht.php"> Harvesting Tools</a></div>
		<div id="gli"><a href="gli.php"> Gliders</a></div>
		<div id="emote"><a href="emote.php"> Emote</a></div>
	</div>-->
<ul class="nav">
		<li><a href="skinadmin.php">Skin List</a></li>
		<li><a href="htadmin.php"> Harvesting Tools</a></li>
		<li><a href="gliadmin.php"> Gliders</a></li>
		<li><a href="emoteadmin.php"> Emote</a></li>
	</ul>



<!--///////////////////////////////////////////////-->
<div class="container">
	<?php while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$img=$row['img'];
		$head=$row['header'];
		$rarity=$row['rarity'];
		$type=$row['type'];
		$availability=$row['availability'];
		$link=$row['link'];
		
	?>
	<div class="row" id="main">
		<div class="col-lg-4" align="center" id="li1">
			<img src="emoteimg/<?php echo $img;?>" width="220px" height="220px" id="img">
		
		</div>
		<div class="col-lg-4" id="intro" align="center" >
			<h2 id="li1"><?php echo $head ?></h2>
			<ul  id="li1">
			<li>Rarity:&nbsp&nbsp<?php echo $rarity?></li>
			<li>Type:&nbsp&nbsp<?php echo $type?></li>
			<li>Availability:&nbsp&nbsp<?php echo $availability?></li>
			<li><a href="<?php echo $link?>"><?php echo $head?>&nbspVideo</a></li>
			
			

		
			</ul>
			<div class="as"><a href="addemote.php" >ADD Skin</a></div>
			<div class="as"><a href="editemote.php?ide=<?php echo $id ?>">Edit</a></div>
			<div class="as"><a href="emotedel.php?dele=<?php echo $id ?>" >Delete</a></div>
		</div>
		<div class="col-lg-4" align="center" id="li2">
					<div id="buy">
				<a href="vbuck.php" >Buy V-Buck</a>
					</div>
				</div>
	</div>

	<?php
}
	 ?>
	
</div>
<!--//////////////////////////////////////////////-->

		
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
				


			</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>