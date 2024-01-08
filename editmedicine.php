
<?php include 'header.php';

//define('DIR', '../');
//require_once DIR . 'config.php';
//$admin= new Admin();
//$control = new Controller(); 

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
		<h2> Medicine</h2>
	</div>
    <form action="Controller/editmedicine.php"method="POST">
    <input type="hidden" name="id" value="<?php echo $row['m_id']; ?>">
	<div class="card-body">
	<div class="form-group">
		
           <label>Name</label>
        <input type="text" name="m_name" class="form-text" required placeholder="Enter name"value="<?php echo $row['m_name']; ?>">
    </div>
    <div class="form-group form-row">
        <label>Image</label>
        <br><input type="file" name="m_image"value="<?php echo $row['m_image']; ?>"> <!-- style="margin-left:50px;" class="form-control col-md-6"!-->
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="m_desc" class="form-text" required placeholder="Description" value="<?php echo $row['m_desc']; ?>"> </textarea>
            </div>

            <div class="form-group">
        <label>MFG date</label>
        <input type="date" name="m_mfg" class="form-text" required placeholder="Enter name"value="<?php echo $row['m_mfg']; ?>">
    </div>
    <div class="form-group">
        <label>Expiry date</label>
        <input type="date" name="m_exp" class="form-text" required placeholder="Enter name"value="<?php echo $row['m_exp']; ?>">
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
	