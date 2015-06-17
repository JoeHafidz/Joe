  	<br>
  	<!-- Input Post -->
	<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#inputCollapse" aria-expanded="false" aria-controls="inputCollapse">
	   <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
	</button>
	<br>
	<div class="collapse" id="inputCollapse">
	  <div class="well">
	    		  <form method="post" action="<?php echo base_url(); ?>user/register_new">
                            <fieldset>
                            	<div class="form-group">
                                    <input class="form-control"  value="<?php echo date("Y-m-d"); ?>" disabled>
    								<input type="hidden" name="tanggal_order" value="<?php echo date("Y-m-d"); ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Note" name="note" type="text">
                                </div>
                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
								<button type="submit" class="btn btn-lg btn-success btn-block">Save</button>
                            </fieldset>
                        </form>
	  </div>
	</div>
	<!--  -->
	<!-- Content Data -->
		<table class="table table-striped table-hover table-responsive" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
				  	<th>Tanggal</th>
				  	<th>Note</th>
				  	<th>Status</th>
				  	<th>Action</th>
				</tr>
		  	</thead>
		  	<tbody>
		  	<?php $no=1; for ($i=0; $i <count($klien_order) ; $i++) { ?>
		  		<tr>
		  			<td><?php echo $no ?></td>
				  	<td><?php echo $klien_order[$i]['tanggal_order']; ?></td>
				  	<td><?php echo $klien_order[$i]['note']; ?></td>
				  	<td><?php echo $klien_order[$i]['status']; ?></td>
				  	<td>
				  		<a href="<?php echo site_url("klien/delete/". $klien_order[$i]["id_user_order"]); ?>" class="btn btn-default btn-sm glyphicon glyphicon-trash" role="button"></a>
				  	</td>
			  	</tr>
		  	<?php $no++;} ?>
		  	</tbody>
		</table>
	<!--  -->