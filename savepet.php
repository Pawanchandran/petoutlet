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
	$p_name=$_POST['p_name'];
    $p_breed=$_POST['p_breed'];
	$p_image=$_POST['p_image'];
	$p_tagname=$_POST['p_tagname'];
	//$c_id=$_SESSION['id'];
	$c_id='1';
	$stmt=$admin->add_data5('pets','p_name','p_breed','c_id','p_image','p_tagname',$p_name,$p_breed,$c_id,$p_image,$p_tagname);
}

?>

