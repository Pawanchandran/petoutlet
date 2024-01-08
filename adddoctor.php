
<?php include 'header.php';?>
<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;">
<div class="card text-white" style="background-color:rgba(74, 74, 177, 0.46);">
	<div class="card-header badge-success">
		<h2> Doctor Register</h2>
	</div>
	<form action="Controller/savedoctor.php" method="POST">
	<div class="card-body">
	
	<div class="form-group form-row">
		<label class="col-md-4">Name</label>
		<input type="text" name="d_name" class="form-control col-md-8" pattern="[A-Za-z]+" title="letters only" required>
	</div>
	
	<div class="form-group form-row">
		<label class="col-md-4">User Name</label>
		<input type="text" name="d_username" class="form-control col-md-8" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alphanumeric 6 to 12 chars">
	</div>
	<div class="form-group form-row">
		<label class="col-md-4">Password</label>
		<input type="password" name="d_password" class="form-control col-md-8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
	</div>
	
	<div class="form-group form-row">
		<label class="col-md-4">Phone</label>
		<input type="tel" name="d_number" class="form-control col-md-8" pattern="[0-9]+" title="only letters" required>
			</div>
	<div class="form-group form-row">
		<label class="col-md-4">Qualification</label>
		<input type="text" name="d_qualification" class="form-control col-md-8" >
	</div>
	<div class="form-group form-row">
		<label class="col-md-4">Address</label>
       <textarea name="d_address" class="form-control col-md-8" ></textarea>
</div>
    <div class="form-group form-row">
		<label class="col-md-4">Email</label>
		<input type="email" name="d_email" class="form-control col-md-8" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required >
	</div>
</div>
<div class="card-footer form-row">
		
		<input type="submit" name="btn" value="submit" class=" btn-success col-md-5">
				<input type="reset" name="clr" value="cancel" class=" btn-danger col-md-5">

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