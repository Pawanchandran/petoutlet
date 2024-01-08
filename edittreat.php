<?php
define('DIR', '../');
require_once DIR . 'config.php';
$doctor= new Admin();
$control = new Controller(); 

if (isset($_GET['table'])) {
	# code...
	$table=$_GET['table'];
	$field=$_GET['fieldid'];
		//$value=$_GET['value'];
	//$fieldid=$_GET['fieldid'];
	$id=$_GET['id'];
		//$page=$_GET['page'];


    $stmt=$doctor->show_id($table,$field,$id);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
      

}
?>
<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
</head>
<body style="background-image:url('pic1.jpg')">
<?php include 'header.php';?>
<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;">
<div class="card">
	<div class="card-header badge-success">
		<h2> Treatment</h2>
	</div>
    <form action="Controller/edittreatment.php"method="POST">
    <input type="hidden" name="id" value="<?php echo $row['t_id']; ?>">
	<div class="card-body">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="t_name" class="form-text" required placeholder="Enter user name"value="<?php echo $row['t_name']; ?>">
    </div>
    <div class="form-group">
        <label>Injury</label>
        <input type="text" name="t_injury" class="form-text" required placeholder="Enter time"value="<?php echo $row['t_injury']; ?>">
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="t_desc" class="form-text" required placeholder="Enter date"value="<?php echo $row['t_desc']; ?>">
    </div>
<div class="card-footer form-row">
        <input type="submit" name="btn" value="submit" class="btn btn-success">
                <input type="reset" name="clr" value="cancel" class="btn btn-danger">

    </div>


	</form>

</div>
</div>
 <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
</html>
	