<?php
//$control->isLogged('admin', 'admin/index'); 
include 'header.php';
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
							<th>Shop name</th>
							<th>Address</th>
							<th>Contact</th>
							
							
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody id="example">
						<?php
						$i=1;
						$table="store";
						$stmt = $admin->showall($table);
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo '<tr><td>'.$i.'</td>
						<td>'.$row['s_name'].'</td><td>'.$row['s_address'].'</td>
						<td>'.$row['s_contact'].'</td>';

						 echo '<td><a href="Controller/delete.php?id='.$row['s_id'].'&table='.$table.'&fieldid=s_id"
            class="btn btn-warning">delete</a></td>';

            echo '<td><a href="editstore.php?id='.$row['s_id'].'&table='.$table.'&fieldid=s_id"
            class="btn btn-success">edit</a></td>';?>
						<td><a href="viewaccessories.php?id=<?php echo $row['s_id']; ?>" class="btn btn-info">Pet</a></td>
						<td><a href="viewpet.php?id=<?php echo $row['s_id']; ?>" class="btn btn-info">Accessories</a></td>
						<td><a href="viewfood.php?id=<?php echo $row['s_id']; ?>" class="btn btn-info">Food</a></td>

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