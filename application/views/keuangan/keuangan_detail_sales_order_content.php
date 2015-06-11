<br>
			<div class="row">
				<div class="col-md-8">
					<div class="panel panel-success">
					<div class="panel-heading">Detail Order</div>
						<div class="panel-body">
							<p><b>No Order : <?php echo $detail_order[0]['noso']; ?></b></p>
							<p><b>Tanggal Order : <?php $date=date_create($detail_order[0]['tanggal_order']); echo date_format($date,"d M Y"); ?></b></p>
							<p><b>Pemberi Order : <?php echo $detail_order[0]['pemberi_order']; ?></b></p>
							<p><b>Perusahaan 	: <?php echo $detail_order[0]['perusahaan']; ?></b></p>
							<p><b>Alamat Perusahaan : <?php echo $detail_order[0]['alamat_perusahaan']; ?></b></p>
							<p><b>CRP : <?php echo $detail_order[0]['crp']; ?></b></p>
							<p><b>Jenis Order : <?php echo $detail_order[0]['jenis_order']; ?></b></p>
							<p><b>Materi Siar : <?php echo $detail_order[0]['materi_siar']; ?></b></p>	
						</div>
						<div class="panel-footer">
						Status Approve
							<form method="post" action="<?php echo base_url(); ?>keuangan/konfirmasi">
								<select class="form-control">
									<option value="2">Setuju</option>
									<option value="3">Tolak</option>
								</select>
								<br>
								<textarea class="form-control" name="komen"></textarea>
								<br>
								<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
								<input type="hidden" name="soid" value="<?php echo $detail_order[0]['idso']; ?>">
								<button class="btn btn-outline btn-primary" type="submit">Save</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-success">
					<div class="panel-heading">Jadwal Siar</div>
						<div class="panel-body">
							
						</div></div>
				</div>
			</div>
