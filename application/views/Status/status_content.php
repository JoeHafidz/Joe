	<br>
	<!-- Content Data -->
		<table class="table table-striped table-hover table-responsive" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
				  	<th>Status</th>
				  	<th>Action</th>
				</tr>
		  	</thead>
		  	<tbody>
		  	<?php $no=1; for ($i=0; $i <count($show_status) ; $i++) { ?>
		  		<tr>
		  			<td><?php echo $no ?></td>
				  	<td><?php echo $show_status[$i]['deskripsi']; ?></td>
				  	<td>
				  		<a href="<?php echo site_url("status/edit/". $show_status[$i]["id_status_so"]); ?>" class="btn btn-default btn-sm glyphicon glyphicon-pencil" role="button"></a>
				  	</td>
			  	</tr>
		  	<?php $no++;} ?>
		  	</tbody>
		</table>
	<!--  -->