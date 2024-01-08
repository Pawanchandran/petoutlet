
<?php include 'header.php';?>

<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;">
<div class="card text-white" style="background-color:rgba(74, 74, 177, 0.46);">
	<div class="card-header badge-success" >
		<h2> Doctor Register</h2>
	</div>
	    <form action="Controller/savedoctor.php"method="POST">

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
		<input type="tel" name="d_number" class="form-control col-md-8" pattern="[0-9]+" title="only numbers" required>
			</div>
	<div class="form-group form-row">
		<label class="col-md-4">Qualification</label>
		<input type="text" name="d_qualification" class="form-control col-md-8" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alphanumeric 6 to 12 chars" required>
	</div>
	<div class="form-group form-row">
		<label class="col-md-4">Address</label>
       <textarea name="d_address" class="form-control col-md-8" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alphanumeric 6 to 12 chars" required ></textarea>
</div>
    <div class="form-group form-row">
		<label class="col-md-4">Email</label>
		<input type="email" name="d_email" class="form-control col-md-8" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required >
	</div>
		<input type="submit" name="btn" value="submit" class="btn btn-success col-md-5">
			&nbsp;
				<input type="reset" name="clr" value="cancel" class="btn btn-danger col-md-5" style="float:right;">
	</div>
	</form>

</div>
</div>
 <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
  
   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>
</html>
	