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
									<td><?php echo $detail_order[0]['klien_id']; ?></td>
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
									<td>Nama Order</td>
									<td><?php echo $detail_order[0]['nama_order']; ?></td>
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
							<?php if (empty($detail_status[0])) { ?> <p><b>Status admin</b> : 
							<?php } else { $status = $detail_status[0]['status'];if ($status == 2) {echo "Setuju";} else {echo "Tidak Setuju";}  ?></p>
							<p><b>Note</b> : <?php echo $detail_status[0]['komen']; } ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">Status Order</div>
						<div class="panel-body">
							<p><?php echo $detail_order[0]['status_order']; ?></p>

							<?php if ($detail_order[0]['status_produksi'] == 2 || $detail_order[0]['status_produksi'] == 3) { ?>
							<a href="<?php echo base_url() ?>sounds/<?php echo $file_produksi[0]['filename']; ?>" class="btn btn-primary" download><i class="fa fa-play-circle"></i> Download </a>
							<br>
								<?php if ($detail_order[0]['status_id'] == 5) { ?>
								Accept File ?
								<br>
								<form method="post" action="<?php echo base_url(); ?>produksi/konfrim_order_file">
									<select class="form-control" name="file_konfirm">
										<option value="3">Setuju</option>
										<option value="4">Tidak Setuju</option>
									</select>
									<input type="hidden" name="idso" value="<?php echo $detail_order[0]['idso']; ?>">
									<input type="hidden" name="id_upload_so" value="<?php echo $file_produksi[0]['id_upload_so']; ?>">
									<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
									<input type="text" name="komen" class="form-control" placeholder="Note :">
									<button type="submit" class="btn btn-sm btn-info">Save</button>
								</form>
								<!-- <a href="<?php echo base_url(); ?>produksi/accept_order/<?php echo $detail_order[0]['idso']; ?>" class="btn btn-success btn-circle" title="Accept"><i class="fa fa-thumbs-o-up"></i> </a>
								<a href="<?php echo base_url(); ?>produksi/decline_order/<?php echo $detail_order[0]['idso']; ?>" class="btn btn-danger btn-circle" title="Tolak"><i class="fa fa-thumbs-o-down"></i> </a> -->
								<?php } ?>
							<?php } echo 'Note : '.$file_produksi[0]['komen']; ?>
						</div></div>
					<div class="panel panel-success">
					<div class="panel-heading">Jadwal Siar
						<div class="pull-right">
						<a href="#" class="btn btn-info btn-xs" title="Laporan Siaran" onClick="MyWindow=window.open('<?php echo base_url(); ?>keuangan/laporan_siar/<?php echo $detail_order[0]['idso']; ?>','MyWindow','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=600,height=600'); return false;">Laporan Siaran</a>
						</div>
					</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered table-hover" id="dataTableJam">
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
