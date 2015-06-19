  	<br>
  	<!-- Input Post -->
	<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#inputCollapse" aria-expanded="false" aria-controls="inputCollapse">
	   Request Iklan
	</button>
	<br>
	<div class="collapse" id="inputCollapse">
	  <div class="well">
	    		  <form method="post" action="<?php echo base_url(); ?>klien/request_new">
                            <fieldset>
                            	<div class="form-group">
                                    <input class="form-control"  value="<?php echo date("Y-m-d"); ?>" disabled>
    								<input type="hidden" name="tanggal_order" value="<?php echo date("Y-m-d"); ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Note" name="note" type="text" required>
                                </div>
                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
								<button type="submit" class="btn btn-lg btn-success btn-block">Save</button>
                            </fieldset>
                        </form>
	  </div>
	</div>
	<!--  -->
	<!-- Content Data -->
		<table class="table table-striped table-hover table-responsive">
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
				  	<td><?php echo $klien_order[$i]['status_order']; ?></td>
				  	<td>
				  		<?php if ($klien_order[$i]['status_id'] == 9) { ?>
				  		<a href="<?php echo site_url("klien/delete/". $klien_order[$i]["id_user_order"]); ?>" class="btn btn-default btn-sm glyphicon glyphicon-trash" role="button"></a>
				  		<?php } ?>
				  	</td>
			  	</tr>
		  	<?php $no++;} ?>
		  	</tbody>
		</table>
	<!--  -->
	<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTable" role="grid" aria-describedby="dataTables">
	<thead>
	<tr>
		<td>No</td>
		<td>Sales Number</td>
		<td>Nama Order</td>
		<td>Tanggal Order</td>
		<td>Status Order</td>
	</tr>
	</thead>
	<tbody>
	<?php $no = '1'; for ($i=0; $i <count($order_so) ; $i++) { ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><a href = "<?php echo base_url(); ?>klien/order_detail/<?php echo $order_so[$i]['idso']; ?>"><?php echo $order_so[$i]['noso']; ?></a></td>
		<td><?php echo $order_so[$i]['nama_order']; ?></td>
		<td><?php $date=date_create($order_so[$i]['tanggal_order']); echo date_format($date,"d M Y"); ?></td>
		<td><?php echo $order_so[$i]['status_order']; ?></td>
	</tr>
	<?php $no++;} ?>
	</tbody>
</table>