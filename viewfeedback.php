<?php
//$control->isLogged('admin', 'admin/index'); 
include 'header.php';
?>
             <div class="card col-md-10">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
                        <table class="table table-stripped" id="dataTable" cellspacing="0" bgcolor="skyblue">
          <thead>
            <tr>
            <th>#</th>
							<th>Rating</th>
							<th>Feedback </th>
							
						
						</tr>
					</thead>
					<tbody id="example">
						<?php
						$i=1;
						$table="customer";
						$stmt = $admin->show_id($table,'c_id',$_SESSION['user2']);
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo '	<td>'.$row['rating'].'</td><td>'.$row['feedback'].'</td>';
         

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

 

</body>

</html>






