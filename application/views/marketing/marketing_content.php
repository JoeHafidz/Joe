<a class="btn btn-success" href="<?php echo base_url(); ?>marketing/tambah_order" role="button">Tambah Order</a>
<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTable" role="grid" aria-describedby="dataTables">
	<thead>
	<tr>
		<td>No</td>
		<td>Sales Number</td>
		<td>Nama Order</td>
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
		<td><a href = "<?php echo base_url(); ?>marketing/order_detail/<?php echo $order_so[$i]['idso']; ?>"><?php echo $order_so[$i]['noso']; ?></a></td>
		<td><?php echo $order_so[$i]['nama_order']; ?></td>
		<td><?php echo $order_so[$i]['klien_id']; ?></td>
		<td><?php $date=date_create($order_so[$i]['tanggal_order']); echo date_format($date,"d M Y"); ?></td>
		<td><?php echo $order_so[$i]['crp']; ?></td>
		<td><?php echo $order_so[$i]['status_order']; ?></td>
	</tr>
	<?php $no++;} ?>
	</tbody>
</table>