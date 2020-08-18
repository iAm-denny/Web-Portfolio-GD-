<?php 
require_once 'database.php';
$sql="SELECT * FROM usermessage";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>User's Message</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
</head>
<body>
<div class="pos-f-t" id="navS">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4" id="navbar">
      <a href="index.php" id="nav">User List</a>
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
	
<table class="table table-bordered" >
	<thead class="table-active">
	<tr>
		<th>ID</th>
		<th>User's Messages</th>
		<th>Time</th>
		<th>Delete</th>
	</tr>
</thead>
		<?php 
			while($row=mysqli_fetch_assoc($result)){
				$id=$row['id'];
				$um=$row['message'];
				$time=$row['senttime']
			
		?>
	<tr id="list">
		<td>No. <?php echo $id ?></td>
		<td><?php echo $um?></td>
		<td><?php echo $time ?></td>
		<td class="table-danger" align="center" id="del"><a href="ums.php?umsdel=<?php echo $id ?>"><i class="fas fa-trash-alt"></i></a></td>
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