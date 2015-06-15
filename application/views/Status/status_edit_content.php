<div class="panel panel-success">
	<div class="panel-heading">Edit Status</div>
	<div class="panel-body">
		<form method="post" action="<?php echo base_url(); ?>status/edit_run">
		<input type="hidden" name="id_status_so" value="<?php echo $edit_status[0]['id_status_so']; ?>">
		<input type="text" name="deskripsi" value="<?php echo $edit_status[0]['deskripsi']; ?>" class="form-control">
		<br>
		<button type="submit" class="btn btn-info">Save</button>
		</form>
</div></div>