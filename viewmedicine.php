<?php 
//$control->isLogged('admin', 'admin/index'); 
include 'header.php';
 //if (isset($_GET['id'])) {
  # code...
 // $id=$_GET['id'];
         //   $stmt = $admin->ret('select * from medicine inner join doctor on doctor.d_id=medicine.d_id and doctor.d_id='.$id);
//

//}else{
      //      $table="medicine";

        //    $stmt = $admin->showall($table);
?>
             <div class="card">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" cellspacing="0" bgcolor="skyblue">
          <thead>
            <tr>
             <th>#</th>
							<th>Name</th>
							<th> Image</th>  
							<th>Description</th>
							<th>MFG date</th>
              <th>Exp date</th>
							
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody id="example">   
						<?php
						$i=1;
						$table="medicine";
						$stmt = $admin->showall($table);
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo '<tr><td>'.$i.'</td>
						<td>'.$row['m_name'].'</td><td>'.$row['m_image'].'</td>
						<td>'.$row['m_desc'].'</td><td>'.$row['m_mfg'].'</td><td>'.$row['m_exp'].'</td>'; echo '<td>
            <a href="Controller/delete.php?id='.$row['m_id'].'&table='.$table.'&fieldid=m_id"
            class="btn btn-warning">delete</a></td>';

            echo '<td><a href="editmedicine.php?id='.$row['m_id'].'&table='.$table.'&fieldid=m_id"
            class="btn btn-success">edit</a></td>';

             ?>
                        </tr> 
  
					<?php
					$i++; }
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






