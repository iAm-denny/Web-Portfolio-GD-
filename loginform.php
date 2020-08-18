
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="loginformcode.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
	<title>Sign</title>
</head>
<body>

	<div id="bg"></div>
	<div  id="main" >
		
			
			<div  id="register">
				
				<form action="register.php" method="post">
				<h2 align="center">Welcome!!</h2>
				<div id="line"></div>
				<h6 align="center">Don't have an acoount??</h6>

				<i class="fas fa-long-arrow-alt-down"></i><br><br>
				<input type="submit" name="create" value="Register Here" id="reg" > 

			</form>
			</div>

			<div  id="sign">
				<h2 align="center">Sign In</h2><br><br>
	<form action="signdata.php" id="signin" method="post">

<input type="text" name="username" placeholder="Username" 
id="uname"><br><br>
<input type="password" name="password" placeholder="Password"id="pwd"><br><br>
<input type="submit" name="sign" id="sub" value="Sign In ">
	
	</form>
	<div align="center" id="sk"><a href="index.php">Skip</a></div>
			</div>
			
		
	</div>



























<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>