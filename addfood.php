
<?php include 'header.php';?>
<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;">
<div class="card text-white" style="background-color:rgba(74, 74, 177, 0.46);">
	<div class="card-header badge-success">
		<h2>Food</h2>
	</div>
	<form action="Controller/savefood.php" method="POST">
	<div class="card-body">
	

	<div class="form-group">
		<label>Name</label>
		<input type="text" name="f_name" class="form-control col-md-8" pattern="[A-Za-z]+" title="letters only" required >
	</div>
	<div class="form-group">
		<label>Image</label>
	    <input type="file" name="f_image" accept="image/*"> </img>
	</div>
	<div class="form-group">
		<label>Description</label>
		<textarea name="f_desc" class="form-control col-md-8" ></textarea> 
	</div>
	<div class="form-group">
		<label>Quantity</label>
		<input type="text" name="f_qty" class="form-control col-md-8" pattern="[0-9]+" title="only letters" required>
	</div>
	<div class="form-group">
		<label>Price</label>
		<input type="text" name="f_price" class="form-control col-md-8" pattern="[0-9]+" title="only letters" required>
	</div>
	<div class="form-group">
		<label>Manufactured date</label>
		<input type="date" name="f_mfg" class="form-control col-md-8" >
	</div>
<div class="form-group">
		<label>Expiry date</label>
		<input type="date" name="f_exp" class="form-control col-md-8">
	</div>
	
	
	
<div class="card-footer">
			
		<input type="submit" name="btn" value="submit" class="btn btn-success col-md-5">
				<input type="reset" name="clr" value="cancel" class="btn btn-danger col-md-5">

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