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

<?php include 'header.php';?>
<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;">
<div class="card">
	<div class="card-header badge-success">
		<h2> Doctor</h2>
	</div>
    <form action="Controller/editappointment.php"method="POST">
    <input type="hidden" name="id" value="<?php echo $row['a_id']; ?>">
	<div class="card-body">
	<div class="form-group">
		
    

   <label>Name</label>
        <input type="text" name="a_name" class="form-text" required placeholder="Enter name"value="<?php echo $row['a_name']; ?>">
    </div>
    <div class="form-group">
        <label>Status</label>
         <select type="text" name="a_type" class="form-text" required placeholder="Enter user name"value="<?php echo $row['a_status']; ?>">
            <option>Available</option>
            <option>Unavailable</option>
        
    </div>
    <div class="form-group">
        <label>From</label>
        <input type="time" name="a_time2" class="form-text" required placeholder="Enter time"value="<?php echo $row['a_time1']; ?>">
    </div>
     <div class="form-group">
        <label>To</label>
        <input type="time" name="a_time2" class="form-text" required placeholder="Enter time"value="<?php echo $row['a_time2']; ?>">
    </div>
    <div class="form-group">
        <label>Date</label>
        <input type="date" name="a_date" class="form-text" required placeholder="Enter date"value="<?php echo $row['a_date']; ?>">
    </div>
<div class="card-footer form-row">
        <input type="submit" name="btn" value="submit" class="btn btn-success col-md-5">
                <input type="reset" name="clr" value="cancel" class="btn btn-danger col-md-5" style="float:right;">

    </div>





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
	