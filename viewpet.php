<?php
//$control->isLogged('admin', 'admin/index'); 
include 'header.php';
	if (isset($_GET['id'])) {
  # code...
  $id=$_GET['id'];
          $stmt = $admin->ret('select * from store inner join pets on store.s_id=pets.s_id and store.s_id='.$id);

 
}else{
            $table="pets";

            $stmt = $admin->showall($table);

}

?>
             <div class="card">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
                       <table class="table table-bordered" style="width:1000px" bgcolor="skyblue">
					<thead>
						<tr>
							<th>#</th>
							<th>pet name</th>
							<th>Breed</th>
							<th>Image</th>
							<th>Price</th>
							
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody id="example">
						<?php

						$i=1;
						$table="pets";
						
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo '<tr><td>'.$i.'</td>
						<td>'.$row['p_name'].'</td><td>'.$row['p_price'].'</td>
						<td>'.$row['p_breed'].'</td><td><img src="'.$row['p_image'].'" style="width:400px;"></td> ';
 						   echo '<td><a href="Controller/delete.php?id='.$row['p_id'].'&table='.$table.'&fieldid=p_id"
            class="btn btn-warning">delete</a></td>';

            echo '<td><a href="editpet.php?id='.$row['p_id'].'&table='.$table.'&fieldid=p_id"
            class="btn btn-success">edit</a></td>';

             ?>

  
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