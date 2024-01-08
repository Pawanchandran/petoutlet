<?php
//$control->isLogged('admin', 'admin/index'); 
include 'header.php';
?> <div class="card col-md-10">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
                        <table class="table table-stripped" id="dataTable" cellspacing="0" bgcolor="skyblue">
					<thead>
						<tr>
							<th>#</th>
							<th>Food name</th>
							<th>Image</th>
							<th>Description</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>MFG date</th>
							<th>Expiry date</th>
							
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody id="example">
						<?php
						$i=1;
						$table="food";
						$stmt = $admin->showall($table);
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo '<tr><td>'.$i.'</td>
						<td>'.$row['f_name'].'</td><td>'.$row['f_image'].'</td>
						<td>'.$row['f_desc'].'</td><td>'.$row['f_qty'].'</td>
						<td>'.$row['f_price'].'</td><td>'.$row['f_mfg'].'</td> <td>'.$row['f_exp'].'</td>'; 
						echo '<td><a href="Controller/delete.php?id='.$row['f_id'].'&table='.$table.'&fieldid=f_id"
            class="btn btn-warning">delete</a></td>';

            echo '<td><a href="editfood.php?id='.$row['f_id'].'&table='.$table.'&fieldid=f_id"
            class="btn btn-success">edit</a></td>';

             ?>

						
                        </tr> 
  
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
<script type="text/javascript">					
function searchit(str) {
   // alert(str);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("example").innerHTML = this.responseText;
               // alert(this.responseText);
            }
        };
        xmlhttp.open("GET", "getresult.php?q=" + str, true);
        xmlhttp.send();
}
</script>
</body>
</html> 