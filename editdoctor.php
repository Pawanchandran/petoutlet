<?php include 'header.php';


if (isset($_GET['table'])) {
    # code...
    $table=$_GET['table'];
    $field=$_GET['fieldid'];
        //$value=$_GET['value'];
    //$fieldid=$_GET['fieldid'];
    $id=$_GET['id'];
        //$page=$_GET['page'];


    $stmt=$admin->show_id($table,$field,$id);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
      

}
?>
<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;">
<div class="card text-white" style="background-color:rgba(74, 74, 177, 0.46);">
	<div class="card-header badge-success">
		<h2> Doctor</h2>
	</div>
    <form action="Controller/editdoctor.php"method="POST">
    <input type="hidden" name="id" value="<?php echo $row['d_id']; ?>">
	<div class="card-body">
	<div class="form-group">
		
    <label>Name</label>  
        <input type="text" name="d_name" class="form-control col-md-8" required placeholder="Enter name"value="<?php echo $row['d_name']; ?>">
    </div>
    <div class="form-group">
        <label>user Name</label>
        <input type="text" name="d_username" class="form-text" required placeholder="Enter user name" value="<?php echo $row['d_username']; ?>">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="d_password" class="form-text" required placeholder="Enter password" value="<?php echo $row['d_password']; ?>">
    </div>
    
    <div class="form-group">
        <label>Phone</label>
        <input type="tel" name="d_number" class="form-text" required placeholder="Enter phone number"value="<?php echo $row['d_number']; ?>">
            </div>
    <div class="form-group">
        <label>Qualification</label>
        <input type="text" name="d_qualification" class="form-text" required placeholder="Enter qualification" value="<?php echo $row['d_qualification']; ?>">
    </div>
    <div class="form-group">
       <label>Address</label>
       <textarea name="d_address" class="form-text" required placeholder="Enter the address"><?php echo $row['d_address']; ?></textarea>
</div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="d_email" class="form-text" required placeholder="Enter email"value="<?php echo $row['d_email']; ?>">
    







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
	