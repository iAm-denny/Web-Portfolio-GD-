<?php 
require_once 'database.php';
$ht=$_GET['ht'];
$sql="SELECT * FROM ht where id='".$ht."'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
	$head=$row['header'];
}
?>

<!DOCTYPE html>
<html>
<head>
	
	
	<title>Buy V-Bucks</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="vbuckcode.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	
		<div id="sure" >
			<h1>Thanks You For Purchasing!<br>
				<span id="cw">We'll send code to your Email.</span>
			</h1>
		</div>
	
	<div id="blur">
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
<div class="container-fluid" id="bg">
<form action="vbuckdata.php" id="buy" method="post">
	<input type="text" name="epicid" placeholder="Epic Name" id="epicid" required=""><br>
	<input type="text" name="gname" placeholder="In Game Name" id="gname" required=""><br>
	<input type="text" name="uname" placeholder="Your Name" id="uname" required=""><br>
	<input type="text" name="email" placeholder="Your Email" id="email" required=""><br>

	<label class="price">Price List</label>
	<select id="price" name="price" required="">
		<option>1,000V-bucks:$9.99 USD</option>
		<option>2,500V-bucks:$24.99USD</option>
		<option>6,000V-bucks:$59.99USD</option>
		<option>10,000V-bucks:$99.99USD</option>
	</select><br>
	<label id="pay" >Your Payment</label>
	<select name="pay" id="pay2" required="">
		<option>Master Card</option>
		<option>Visa Card</option>
	</select>
	<br>
	<label id="bn">You Buy- <span id="inbn"><?php echo $head?></span></label><br>
	<!--<a href="#" onclick="toggle()">Read More</a>-->
	<input type="submit" name="buy" value="Buy" id="send"  onclick="pur()">

	<div id="cancel"><a href="vbuck.php">Cancel</a></div>
</form>


		
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

				</div>




	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="app.js"></script>

</body>
</html>