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
    <form action="Controller/editfood.php"method="POST">
    <input type="hidden" name="id" value="<?php echo $row['f_id']; ?>">
    <div class="card-body">
    <div class="form-group form-row">


<div class="form-group">
        <label>Name</label>
        <input type="text" name="f_name" class="form-text" pattern="[A-Za-z]+" title="letters only" required value="<?php echo $row['f_name']; ?>" >
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="f_image" accept="image/*" value="<?php echo $row['f_image']; ?>"> </img>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="f_desc" class="form-text" value="<?php echo $row['f_desc']; ?>" ></textarea> 
    </div>
    <div class="form-group">
        <label>Quantity</label>
        <input type="text" name="f_qty" class="form-text" pattern="[0-9]+" title="only letters" required value="<?php echo $row['f_qty']; ?>">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" name="f_price" class="form-text" pattern="[0-9]+" title="only letters" required value="<?php echo $row['f_price']; ?>">
    </div>
    <div class="form-group">
        <label>Manufactured date</label>
        <input type="date" name="f_mfg" class="form-text" required value="<?php echo $row['f_mfg']; ?>" >
    </div>
<div class="form-group">
        <label>Expiry date</label>
        <input type="date" name="f_exp" class="form-text" required value="<?php echo $row['f_exp']; ?>">
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
	