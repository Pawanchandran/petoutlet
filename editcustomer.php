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
<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;" >
<div class="card text-white" style="background-color:rgba(74, 74, 177, 0.46);">
	<div class="card-header badge-success">
		<h2> Customer</h2>
	</div>
    <form action="Controller/editcustomer.php"method="POST">
    <input type="hidden" name="id" value="<?php echo $row['c_id']; ?>">
	<div class="card-body">
	<div class="form-group form-row">



<h2> Customer Register</h2>
    </div>
    <form action="Controller/editcustomer.php" method="POST">
    <div class="card-body">
    
    <div class="form-group form-row">
        <label class="col-md-4">Name</label>
        <input type="text" name="c_name" class="form-text" pattern="[A-Za-z]+" title="letters only" required value="<?php echo $row['c_name']; ?>">
    </div>
    <div class="form-group form-row">
        <label class="col-md-4">User Name</label>
        <input type="text" name="c_username" class="form-text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alphanumeric 6 to 12 chars"value="<?php echo $row['c_username']; ?>">
    </div>
    <div class="form-group form-row">
        <label class="col-md-4">Password</label>
        <input type="password" name="c_password" class="form-text"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required value="<?php echo $row['c_password']; ?>">
    </div>
    
    <div class="form-group form-row">
        <label class="col-md-4">Phone</label>
        <input type="tel" name="c_number" class="form-text"pattern="[0-9]+" title="only letters" required value="<?php echo $row['c_number']; ?>">
            </div>
    <div class="form-group form-row">
        <label class="col-md-4">Gender</label>
        <select name="c_gender" value="<?php echo $row['c_gender']; ?>">>
        <option value="Male">Male</option>
        <option value="Female">Female.</option>
        </select>
    </div>
    <div class="form-group form-row">
        <label class="col-md-4">Date of birth</label>
        <input type="date" name="c_dob" class="form-text" value="<?php echo $row['c_dob']; ?>">
    </div>
    <div class="form-group form-row">
        <label class="col-md-4">Address</label>
       <textarea name="c_address" class="form-text" Pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alphanumeric 6 to 12 chars" value="<?php echo $row['c_address']; ?>"></textarea>
</div>
    <div class="form-group form-row">
        <label class="col-md-4">Email</label>
        <input type="email" name="c_email" class="form-text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required value="<?php echo $row['c_email']; ?>">
    </div>
</div>
<div class="card-footer form-row">
        <input type="submit" name="btn" value="submit" class="btn btn-success">
                <input type="reset" name="clr" value="cancel" class="btn btn-danger">

    </div>








		


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
	