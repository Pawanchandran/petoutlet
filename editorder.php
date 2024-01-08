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
        <h2> Order</h2>
    </div>
    <form action="Controller/editfood.php"method="POST">
    <input type="hidden" name="id" value="<?php echo $row['f_id']; ?>">
    <div class="card-body">
    <div class="form-group form-row">



    <div class="form-group">
    <label class="col-md-4">Name</label>
        <input type="text" name="o_name" class="form-text" pattern="[A-Za-z]+" title="letters only" requiredvalue="<?php echo $row['o_name']; ?>">
    </div>
    
    <div class="form-group">
        <label class="col-md-4">Type</label>
        <select type="text" name="o_type" class="form-text" value="<?php echo $row['o_type']; ?>">
            <option>pet</option>
            <option>pet accessories</option>
            <option>food</option>
            <option>medicine</option>
        </select>
    <div class="form-group">
        <label class="col-md-4">Quantity</label>
        <input type="text" name="o_qty" class="form-text" pattern="[0-9]+" title="only letters" required value="<?php echo $row['o_qty']; ?>">
    </div>
    <div class="form-group">
        <label class="col-md-4">Price</label>
        <input type="text" name="o_price" class="form-text" pattern="[0-9]+" title="only letters" required value="<?php echo $row['o_price']; ?>">
    </div>
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
	