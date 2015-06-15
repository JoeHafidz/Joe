<br>
			<div class="row">
				<div class="col-md-8">
					<div class="panel panel-success">
					<div class="panel-heading">Detail Order 
						<div class="pull-right">
						<a class="btn btn-info" title="Edit" href="<?php echo base_url(); ?>marketing/edit_order/<?php echo $detail_order[0]['idso']; ?>">
							<i class="fa  fa-pencil "></i>
						</a>
						<a class="btn btn-danger" title="Hapus" href="<?php echo base_url(); ?>marketing/delete_sales_order/<?php echo $detail_order[0]['idso']; ?>">
							<i class="fa fa-bitbucket"></i>
						</a>
						</div>
					</div>
						<div class="panel-body">
						<table class="table">
								<tr>
									<td>No Order</td>
									<td><?php echo $detail_order[0]['noso']; ?></td>
								</tr>
								<tr>
									<td>Tanggal Order</td>
									<td><?php $date=date_create($detail_order[0]['tanggal_order']); echo date_format($date,"d M Y"); ?></td>
								</tr>
								<tr>
									<td>Pemberi Order</td>
									<td><?php echo $detail_order[0]['pemberi_order']; ?></td>
								</tr>
								<tr>
									<td>Perusahaan</td>
									<td><?php echo $detail_order[0]['perusahaan']; ?></td>
								</tr>
								<tr>
									<td>Alamat Perusahaan</td>
									<td><?php echo $detail_order[0]['alamat_perusahaan']; ?></td>
								</tr>
								<tr>
									<td>CRP</td>
									<td><?php echo $detail_order[0]['crp']; ?></td>
								</tr>
								<tr>
									<td>Jenis Order</td>
									<td><?php $jenis_order = ucfirst($detail_order[0]['jenis_order']); echo $jenis_order;  ?></td>
								</tr>
								<tr>
									<td>Materi Siar</td>
									<td><?php $materi_siar = ucfirst($detail_order[0]['materi_siar']); echo $materi_siar; ?></td>
								</tr>
							</table>
						</div>
						<div class="panel-footer">
							<p><b>Status admin</b> : <?php $status = $detail_status[0]['status'];if ($status == 2) {echo "Setuju";} else {echo "Tidak Setuju";} ?></p>
							<p><b>Note</b> : <?php echo $detail_status[0]['komen']; ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">Status Order</div>
						<div class="panel-body">
							<?php echo $detail_order[0]['status_order']; ?>
						</div></div>
					<div class="panel panel-success">
					<div class="panel-heading">Jadwal Siar</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered table-hover">
							<thead>
				              <tr>
				                <th>Tanggal</th>
				                <th>Jam</th>
				              </tr>
				            </thead>
				            <tbody>
				              <?php for ($i=0; $i <count($jadwal_tayang) ; $i++) { ?>
				                <tr>
				               	 <td><?php $date=date_create($jadwal_tayang[$i]['tanggal_jadwal']); echo date_format($date,"d M Y"); ?></td>
				               	 <td><?php $pisah_jam = explode(",", $jadwal_tayang[$i]['waktu_jadwal']); for ($a=0; $a < count($pisah_jam) ; $a++) { 
				               	 	echo $pisah_jam[$a]."<br>";} ?></td>
				              	</tr>
				              <?php } ?>
				            </tbody>
				            </table>
						</div></div>
				</div>
			</div>
