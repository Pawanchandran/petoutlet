
<?php include 'header.php';?>
<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;">
<div class="card text-white" style="background-color:rgba(74, 74, 177, 0.46);">
<div class="card-header badge-success">
		<h2> Accessories</h2>
	</div>
    <form action="Controller/saveaccessories.php" method="POST" >
	<div class="card-body">
	
	<div class="form-group form-row">
		<label class="col-md-4">Name</label>
		<input type="text" name="ac_name" class="form-control col-md-8" pattern="[A-Za-z]+" title="letters only" >
	</div>
	<div class="form-group form-row">
		<label class="col-md-4">Quantity</label>
		<input type="text" name="ac_qty" class="form-control col-md-8" pattern="[0-9]+" title="only letters" >
	</div>
	<div class="form-group form-row">
	<label class="col-md-4">Price</label>
		<input type="text" name="ac_price" class="form-control col-md-8" pattern="[0-9]+" title="only letters" >
	</div>
	<div class="form-group form-row">
	<label class="col-md-4">Image</label>
	    <input type="file" name="ac_image" class="form-control col-md-8" accept="image/*"> 
	</div>
</div>
<div class="card-footer form-row">
        <input type="submit" name="btn" value="submit" class="btn btn-success col-md-5">
                <input type="reset" name="clr" value="cancel" class="btn btn-danger col-md-5" style="float:right;">

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