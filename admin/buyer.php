<?php
require_once 'database.php';
$sql="SELECT * FROM buyer";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buyer</title>
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
    <
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" id="ti"></span>
    </button>
  </nav>
</div>

<table class="table table-bordered">
	<thead class="table-active">
	<tr>
		<th>Id</th>
		<th>Epic name</th>
		<th>Game name</th>
		<th>User name</th>
		<th>Amount</th>
		<th>Payment</th>
		<th>Email</th>
		
		<th>Time</th>
		<th>Delete</th>
	</tr>
	</thead>
	<?php 
		while ($rows=mysqli_fetch_assoc($result)) {
			$id=$rows['id'];
			$en=$rows['epicname'];
			$gname=$rows['gname'];
			$un=$rows['urname'];
			$amount=$rows['amount'];
			$payment=$rows['payment'];
			$email=$rows['email'];
			
			$time=$rows['time'];
		
	?>
	<tr>
		<td><?php echo $id ?></td>
		<td><?php echo $en ?></td>
		<td><?php echo $gname ?></td>
		<td><?php echo $un ?></td>
		<td><?php echo $amount ?></td>
		<td><?php echo $payment ?></td>
		<td><?php echo $email ?></td>

		<td><?php echo $time ?></td>
		<td class="table-danger" align="center" id="del"><a href="buyerdel.php?buyerdel=<?php echo $id ?>"><i class="fas fa-trash-alt"></i></a></td>
	</tr>
	<?php 
		}
	?>
	
</table>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>