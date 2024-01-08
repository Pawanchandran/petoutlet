<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body id="page-top" style="background-color:skyblue">
<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;">
<div class="card text-white" style="background-color:rgba(74, 74, 177, 0.46);">

<div class="container">
<form action="Controller/adminlogin.php" method="POST">
	<div>
		<h2>Login form</h2>
	</div>
	<div class="form-group form-row">
        <label class="col-md-4">Username</label>
		<input type="text" name="username" class="form-text"  required placeholder="Enter username">
	</div>
	<div class="form-group form-row">
        <label class="col-md-4">Password</label>
		<input type="password" name="password" class="form-text"  required placeholder="Enter password">
	</div>
	
	
	
	<div>
		<input type="submit" name="login" value="login" class="btn btn-success">
	<a href="register.php?id=<?php echo $row['id']; ?>">Register</a>

	
</form>
</div>
</div>
</div>
</body>
</html>


