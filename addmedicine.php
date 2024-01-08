

<?php include 'header.php';?>
<div class="container" style="max-width:400px; min-width:400px; margin-top:1s0px;">
<div class="card text-white" style="background-color:rgba(74, 74, 177, 0.46);">
	<div class="card-header badge-success">
		<h2> Medicine</h2>
	</div>

    <form action="Controller/savemedicine.php"method="POST">
	<div class="card-body">
    <div class="form-group form-row">

    </div>
	<div class="form-group form-row">
		<label class="col-md-4">Name</label>
		<input type="text" name="m_name" class="form-control col-md-7"  pattern="[A-Za-z]+" title="letters only" required class=>
	</div>
	<div class="form-group form-row">
		<label class="col-md-4">Image</label>
	    <br><input type="file" name="m_image" class="form-control col-md-7"> <!-- style="margin-left:50px;" class="form-control col-md-6"!-->
	</div>
	<div class="form-group form-row">
		<label class="col-md-4">Description</label>
		<textarea name="m_desc" class="form-control col-md-7" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alphanumeric 6 to 12 chars"></textarea>
			</div>

			<div class="form-group form-row">
		<label class="col-md-4">MFG date</label>
		<input type="date" name="m_mfg" class="form-control col-md-7">
	</div>
	<div class="form-group form-row">
		<label class="col-md-4">Expiry date</label>
		<input type="date" name="m_exp" class="form-control col-md-7" >
	</div>
	</div>
	<div class="card-footer">
		<input type="submit" name="btn" value="submit" class="btn btn-success col-md-5" >
		&nbsp;
				<input type="reset" name="clr" value="cancel" class="btn btn-danger col-md-5" >

	</div>
	</form>

</div>
</div>
</body>
</html>
	