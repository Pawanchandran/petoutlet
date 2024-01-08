<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body id="page-top" style="background-color:skyblue">
<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;">
<div class="card text-white" style="background-color:rgba(74, 74, 177, 0.46);">

<form action="Controller/doctorlogin.php" method="POST">
	<div>
		<h2>Login form</h2>
	</div>
	<div class="form-group form-row">
        <label class="col-md-4">Username</label>
		<input type="text" name="d_username" class="form-text"  required placeholder="Enter username">
	</div>
	<div class="form-group form-row">
        <label class="col-md-4">Password</label>
		<input type="password" name="d_password" class="form-text"  required placeholder="Enter password">
	</div>
	

	<div>
		<input type="submit" name="login" value="Login" class="btn btn-success">
	</div>
	<a href="register.php?id=<?php echo $row['id']; ?>">Register</a>
	
</form>
</div>
</body>
</html>





