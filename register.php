

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="registercode.css">

</head>
<body>
<form  id="main" action="registerdata.php" method="post">

	<label>Username </label><br>
		<input type="text" name="uname" id="uname" required=""> <br>

	<label>Email</label><br>
		<input type="email" name="email" id="email" required=""><br >

	<label>Password</label><br>
		<input type="password" name="pwd" id="pwd" required=""><br>


	
			<input type="submit" name="create" value="Create" id="crt"">
			<div id="back"><a href="loginform.php" >Back</a>	</div>
		</form>

		
</body>
</html>