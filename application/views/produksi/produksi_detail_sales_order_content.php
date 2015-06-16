<br>
			<div class="row">
				<div class="col-md-8">
					<div class="panel panel-success">
					<div class="panel-heading">Detail Order</div>
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
							<?php if ($detail_order[0]['status_produksi'] == 1) { ?>
								<?php echo form_open_multipart('produksi/upload_produksi');?>	
								<input type="file" name="userfile[]">
								<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
								<input type="hidden" name="produksi_update" value="2">
								<input type="hidden" name="status" value="5">
								<input type="hidden" name="so_id" value="<?php echo $detail_order[0]['idso']; ?>">
								<br>
								<button class="btn btn-outline btn-primary" type="submit">Upload</button>
								</form>
							<?php } else { ?> 
								<table class="table">
									<tr>
										<td>Nama File</td>
										<td></td>
										<td><?php echo $file_produksi[0]['filename']; ?></td>
										<?php if ($detail_order[0]['status_produksi'] == 2 || $detail_order[0]['status_produksi'] == 4) { ?>
											<td><a href="<?php echo base_url(); ?>produksi/delete_file/<?php echo $file_produksi[0]['id_upload_so']."upload".$detail_order[0]['idso']; ?>" class="btn btn-danger btn-circle" title="Hapus File"><i class="fa fa-trash-o"></i></a></td>
										<?php } ?>
									</tr>
								</table>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
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
