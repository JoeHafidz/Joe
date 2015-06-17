<br>
<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTable" role="grid" aria-describedby="dataTables">
	<thead>
	<tr>
		<td>No</td>
		<td>Sales Number</td>
		<td>Pemberi Order</td>
		<td>Tanggal Order</td>
		<td>CRP</td>
		<td>Status Order</td>
	</tr>
	</thead>
	<tbody>
	<?php $no = '1'; for ($i=0; $i <count($order_penyiaran) ; $i++) { ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><a href = "<?php echo base_url(); ?>penyiaran/order_detail/<?php echo $order_penyiaran[$i]['idso']; ?>"><?php echo $order_penyiaran[$i]['noso']; ?></a></td>
		<td><?php echo $order_penyiaran[$i]['pemberi_order']; ?></td>
		<td><?php echo $order_penyiaran[$i]['tanggal_order']; ?></td>
		<td><?php echo $order_penyiaran[$i]['crp']; ?></td>
		<td>
		<?php 
			echo $order_penyiaran[$i]['status_order'];
		?>
		</td>
	</tr>
	<?php $no++;} ?>
	</tbody>
</table>