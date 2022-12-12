<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name']; ?>">
					</div>
				</div>
				   <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Employ. status</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="employ" value="<?php echo $row['employ']; ?>">
					</div>
				</div>



				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Date of Birth</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dob" value="<?php echo $row['dob']; ?>">
					</div>
				</div>
                                 

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Gender</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="gender" value="<?php echo $row['gender']; ?>">
					</div>
				</div>



                               <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Region</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="region" value="<?php echo $row['region']; ?>">
					</div>
				</div>


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['first_name'].' '.$row['last_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>