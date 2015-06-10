<a class="btn btn-success" href="<?php echo base_url(); ?>marketing/tambah_order" role="button">Tambah Order</a>
<table class="table">
	<tr>
		<td>No</td>
		<td>Sales Number</td>
		<td>Pemberi Order</td>
		<td>Tanggal Order</td>
		<td>CRP</td>
		<td>Status Order</td>
	</tr>
	<?php $no = '1'; for ($i=0; $i <count($order_so) ; $i++) { ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><a href = "<?php echo $order_so[$i]['idso']; ?>"><?php echo $order_so[$i]['noso']; ?></a></td>
		<td><?php echo $order_so[$i]['pemberi_order']; ?></td>
		<td><?php echo $order_so[$i]['tanggal_order']; ?></td>
		<td><?php echo $order_so[$i]['crp']; ?></td>
		<td><?php echo $order_so[$i]['status_id']; ?></td>
	</tr>
	<?php $no++;} ?>
	

</table>