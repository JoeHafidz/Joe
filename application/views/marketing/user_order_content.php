  	<br>
	<!-- Content Data -->
		<table class="table table-striped table-hover table-responsive" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
				  	<th>Tanggal</th>
				  	<th>Pemberi Order</th>
				  	<th>Note</th>
				  	<th>Status</th>
				  	<th>Action</th>
				</tr>
		  	</thead>
		  	<tbody>
		  	<?php $no=1; for ($i=0; $i <count($show_user_data) ; $i++) { ?>
		  		<tr>
		  			<td><?php echo $no ?></td>
				  	<td><?php echo $show_user_data[$i]['tanggal_order']; ?></td>
				  	<td><?php echo $show_user_data[$i]['klien_id'].' - '.$show_user_data[$i]['telp']; ?></td>
				  	<td><?php echo $show_user_data[$i]['note']; ?></td>
				  	<td><?php echo $show_user_data[$i]['status_order']; ?></td>
				  	<td>
				  		<?php if ($show_user_data[$i]['status_id'] == 9) { ?>
				  			<a href="<?php echo site_url("marketing/approve_order/". $show_user_data[$i]["id_user_order"]); ?>" class="btn btn-default btn-sm fa fa-check" role="button"></a>
				  		<?php } ?>
				  		
				  	</td>
			  	</tr>
		  	<?php $no++;} ?>
		  	</tbody>
		</table>
	<!--  -->