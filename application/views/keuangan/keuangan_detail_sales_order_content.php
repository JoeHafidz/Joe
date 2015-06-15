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
									<td><?php echo $detail_order[0]['jenis_order']; ?></td>
								</tr>
								<tr>
									<td>Materi Siar</td>
									<td><?php echo $detail_order[0]['materi_siar']; ?></td>
								</tr>
							</table>
							<!-- <p><b>No Order : <?php //echo $detail_order[0]['noso']; ?></b></p>
							<p><b>Tanggal Order : <?php //$date=date_create($detail_order[0]['tanggal_order']); echo date_format($date,"d M Y"); ?></b></p>
							<p><b>Pemberi Order : <?php //echo $detail_order[0]['pemberi_order']; ?></b></p>
							<p><b>Perusahaan 	: <?php //echo $detail_order[0]['perusahaan']; ?></b></p>
							<p><b>Alamat Perusahaan : <?php //echo $detail_order[0]['alamat_perusahaan']; ?></b></p>
							<p><b>CRP : <?php //echo $detail_order[0]['crp']; ?></b></p>
							<p><b>Jenis Order : <?php //echo $detail_order[0]['jenis_order']; ?></b></p>
							<p><b>Materi Siar : <?php //echo $detail_order[0]['materi_siar']; ?></b></p>	 -->
						</div>
						<div class="panel-footer">
							Status Approve
							<?php $statusapprove =  $detail_order[0]['approve'];
							if ($statusapprove == '1') { ?>
							 	<form method="post" action="<?php echo base_url(); ?>keuangan/konfirmasi">
								<select class="form-control" name="status">
									<option value="2">Setuju</option>
									<option value="3">Tidak Setuju</option>
								</select>
								<br>
								<textarea class="form-control" name="komen"></textarea>
								<br>
								<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
								<input type="hidden" name="so_id" value="<?php echo $detail_order[0]['idso']; ?>">
								<button class="btn btn-outline btn-primary" type="submit">Save</button>
							</form>
							 <?php } else { $approve = $approve_status[0]['status']; if ($approve == 2) { echo "<b>"." : Setuju"."</b><br>"."Note : ".$approve_status[0]['komen'];?><br><a href="<?php echo base_url(); ?>keuangan/set_jadwal/<?php echo $detail_order[0]['idso'];?>" class="btn btn-outline btn-success">Set Jadwal</a> <?php } 
							 else {echo "<b>"." : Tidak Setuju"."</b><br>"."Note : ".$approve_status[0]['komen'];}} ?>
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
