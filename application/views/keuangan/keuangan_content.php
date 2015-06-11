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
	<?php $no = '1'; for ($i=0; $i <count($order_so) ; $i++) { ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><a href = "<?php echo base_url(); ?>keuangan/order_detail/<?php echo $order_so[$i]['idso']; ?>"><?php echo $order_so[$i]['noso']; ?></a></td>
		<td><?php echo $order_so[$i]['pemberi_order']; ?></td>
		<td><?php echo $order_so[$i]['tanggal_order']; ?></td>
		<td><?php echo $order_so[$i]['crp']; ?></td>
		<td>
		<?php 
			$status = $order_so[$i]['status_id']; 
			if ($status == 1) {
				echo "Belum Disetujui";
			} if ($status == 2) {
				echo "Silahkan Masukkan Jadwal";
			} if ($status == 3) {
				echo "Tidak Disetujui";
			} 
		?>
		</td>
	</tr>
	<?php $no++;} ?>
	</tbody>
</table>