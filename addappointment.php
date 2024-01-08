
<?php include 'header.php';?>
<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;">
<div class="card text-white" style="background-color:rgba(74, 74, 177, 0.46);">
<div class="card-header badge-success">
		<h2>Appointment</h2>
	</div>
    <input type='hidden' value="<?php echo $id;?>">
	<form action="Controller/saveappointment.php" method="POST">
	<div class="card-body">
	<div class="form-group form-row">
        <label class="col-md-4">Name</label>
		<input type="text" name="a_name" class="form-control col-md-8"  pattern="[A-Za-z]+" title="letters only" required >
	</div>
	<div class="form-group form-row">
        <label class="col-md-4">Status</label>
        <select type="text" name="a_status" class="form-control col-md-8">
            <option>Available</option>
            <option>Unavailable</option>
            </select>
            </div>
	<div class="form-group form-row">
        <label class="col-md-4">From</label>
		<input type="time" name="a_time1" class="form-control col-md-8">
	</div>
    <div class="form-group form-row">
        <label class="col-md-4">To</label>
    <input type="time" name="a_time2" class="form-control col-md-8">
  </div>
	<div class="form-group form-row">
        <label class="col-md-4">Date</label>
		<input type="date" name="a_date" class="form-control col-md-8" >
	</div>
<div class="card-footer form-row">
		  <input type="submit" name="btn" value="submit" class="btn btn-success col-md-5">
            &nbsp;
                <input type="reset" name="clr" value="cancel" class="btn btn-danger col-md-5" style="float:right;">

	</div>
	</form>

</div>
</div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
</body>
</html>