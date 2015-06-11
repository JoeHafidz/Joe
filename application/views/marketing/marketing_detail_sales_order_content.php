<br>
			<div class="row">
				<div class="col-md-8">
					<div class="panel panel-success">
					<div class="panel-heading">Detail Order 
						<a class="btn btn-info" title="Edit" href="<?php echo base_url(); ?>marketing/edit_order/<?php echo $detail_order[0]['idso']; ?>">
							<i class="fa  fa-pencil "></i>
						</a>
						<a class="btn btn-danger" title="Hapus" href="<?php echo base_url(); ?>marketing/delete_sales_order/<?php echo $detail_order[0]['idso']; ?>">
							<i class="fa fa-bitbucket"></i>
						</a>

					</div>
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
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-success">
					<div class="panel-heading">Jadwal Siar</div>
						<div class="panel-body">

						</div></div>
				</div>
			</div>
