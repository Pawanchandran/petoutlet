<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container" style="max-width:400px; min-width:400px;">
<div class="card">
	<div class="card-header badge-success">
		<h2> Doctor Register</h2>
	</div>
	<div class="card-body">
	
<form action="SUCCESS.html" method="POST">
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="d_name" class="form-text" required placeholder="Enter name">
	</div>
	<div class="form-group">
		<label>user Name</label>
		<input type="text" name="d_username" class="form-text" required placeholder="Enter user name">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="d_password" class="form-text" required placeholder="Enter password">
	</div>
	
	<div class="form-group">
		<label>Phone</label>
		<input type="tel" name="d_contact" class="form-text" required placeholder="Enter phone number">
			</div>
	<div class="form-group">
		<label>Qualification</label>
		<input type="text" name="d_qualification" class="form-text" required placeholder="Enter qualification">
	</div>
	<div class="form-group">
       <label>Address</label>
       <textarea name="d_address" class="form-text" required placeholder="Enter the address"></textarea>
</div>
    <div class="form-group">
		<label>Email</label>
		<input type="email" name="d_email" class="form-text" required placeholder="Enter email">
	</div>
</form>
</div>
<div class="card-footer">
		<input type="submit" value="submit" class="btn btn-success">
	</div>
</div>
</div>
</body>
</html>