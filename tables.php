<?php include 'con_db.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Tables</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
      <?php include 'header.php'; ?>
 
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
          <thead>
            <tr>
              <th>Pid</th>
              <th>pname</th>
              <th>pdesc</th>
              <th>pprize</th>
              <th>Image</th>
              <th>MRP</th>
              <th>HSN</th>
              <th>Barcode</th>
              <th>Product-manufacture</th>
              <th>Expiry-date</th>
              <th>MFG-date</th>
              <th>Product-category</th>
              <th>Packing</th>
              <th>Delete</th>
              <th>Edit</th>
            </tr>      
          </thead>
           <tfoot>
            <tr>
              <th>Pid</th>
              <th>pname</th>
              <th>pdesc</th>
              <th>pprize</th>
              <th>Image</th>
              <th>MRP</th>
              <th>HSN</th>
              <th>Barcode</th>
              <th>Product-manufacture</th>
              <th>Expiry-date</th>
              <th>MFG-date</th>
              <th>Product-category</th>
              <th>Packing</th>
              <th>Delete</th>
              <th>Edit</th>
            </tr>      
          </tfoot>
          <tbody>
            
            <?php
            $result="SELECT * FROM `product`";
             $data=mysqli_query($conn,$result);

             while ($row=mysqli_fetch_array($data)) {
            echo '<tr><td>'.$row['pid'].'</td>
            <td>'.$row['pname'].'</td><td>'.$row['pdesc'].'</td>
            <td>'.$row['pprize'].'</td>
            <td>'.$row['pimage'].'</td>
            <td>'.$row['mrp'].'</td><td>'.$row['hsn'].'</td><td>'.$row['barcode'].'</td>
            <td>'.$row['pmanufacture'].'</td><td>'.$row['expirydate'].'</td>
            <td>'.$row['mfgdate'].'</td><td>'.$row['pcategory'].'</td>
            <td>'.$row['packing'].'</td>'; ?>

            <td><a href="showpdelete.php?id=<?php echo $row['pid']; ?>" onclick="return confirm('are you sure');" class="btn btn-danger">Delete</a></td>
            
            <td><a href="showpedit.php?id=<?php echo $row['pid']; ?>" class="btn btn-info">Edit</a></td>
                        </tr> 

          <?php }
          ?>
          </tbody>        
       
                    </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
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
