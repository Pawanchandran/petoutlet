<?php
define('DIR', '../../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 
//$control->isLogged('admin', 'admin/index'); 

?>
<?php

if (isset($_POST['btn'])) {
	# code...
	$d_username=$_POST['d_username'];
    $d_password=$_POST['d_password'];
	$stmt=$admin->loginAdmin('doctor',$d_username,$d_password);
	if ($stmt) {
		# code...
		echo $stmt;
		//echo '<script> alert("login successful"); window.location="../index.php"; </script>';
	}else {
				//echo '<script> alert("login failed"); window.location= "../login.php";</script>';

	}
}

?>
