<?php
//$control->isLogged('admin', 'admin/index'); 
include 'header.php';

// <style>
// 	.bs-example{
//     	margin: 20px;
//     }
// </style>
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
							<th>Payment type</th>
						
							<th>Price</th>
							<th>Gst</th>
							
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody id="example">
						<?php
						$i=1;
						$table="payment";
						$stmt = $admin->ret('select * from payment ');
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo '<tr><td>'.$i.'</td>
						<td>'.$row['py_type'].'</td>
						<td>'.$row['py_price'].'</td><td>'.$row['py_gst'].'</td>'; 
						  echo '<td><a href="Controller/editstatus.php?id='.$row['py_id'].'&table='.$table.'&field=status&value=cancel&fieldid=py_id&page=viewpayment.php"
          				  class="btn btn-warning">cancel</a></td>';
          				  echo '<td><a href="Controller/editstatus.php?id='.$row['py_id'].'&table='.$table.'&field=status&value=verify&fieldid=py_id&page=viewpayment.php"
            			class="btn btn-success">veirfy</a></td>';?>

						
  
					<?php
					$i++; }
					?>
					</tbody>		
						 		
				</table>
				<script type="text/javascript">
					$(document).ready(function() {
					    $('#example').DataTable();
					} );
				</script>

<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script!-->
</body>
</html> 
