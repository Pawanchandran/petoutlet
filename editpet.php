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
        <h2> Pet</h2>
    </div>
    <form action="Controller/editpet.php"method="POST"  enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $row['p_id']; ?>">
    <div class="card-body">


<div class="form-group form-row">
        <label class="col-md-4"> Name</label>
        <input type="text" name="p_name" class="form-control col-md-8" pattern="[A-Za-z]+" title="letters only" required value="<?php echo $row['p_name']; ?>">
    </div>
    
    <div class="form-group form-row">
        <label class="col-md-4">Pet breed</label>
        <select type="text" name="p_breed" class="form-control col-md-8"value="<?php echo $row['p_breed']; ?>">
            <option>type1</option>
            <option>type2</option>
            <option>type3</option>
        </select>
    </div>
    
    <div class="form-group form-row">
        <label class="col-md-4">Image</label>
        <input type="file" name="p_image" class="form-control col-md-8" accept="image/*" value="<?php echo $row['p_image']; ?>"> 
    </div>
    
    <div class="form-group form-row">
        <label class="col-md-4">Price</label>
        <input type="text" name="p_price" class="form-control col-md-8" pattern="[0-9]+" title="letters only" required value="<?php echo $row['p_price']; ?>">
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
	