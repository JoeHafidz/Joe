  	<br>
  	<!-- Input Post -->
	<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#inputCollapse" aria-expanded="false" aria-controls="inputCollapse">
		Jadwal Siar
	</button>
	<br>
	<div class="collapse" id="inputCollapse">
	  <div class="well">
	    		  <form method="post" action="<?php echo base_url(); ?>penyiaran/jadwal_siar">
                            <fieldset>
                            	<div class="form-group">
                                    <select class="form-control" name="so_id" id="so_id">
                                    	<option>Pilih Order Iklan</option>
                                    	<?php for ($i=0; $i <count($order_iklan) ; $i++) { ?>
                                    		<option value="<?php $so_id = $order_iklan[$i]['idso']; echo 'so_id'.$so_id ?>"><?php echo $order_iklan[$i]['klien_id'].' - '.$order_iklan[$i]['nama_order'].' - '.$order_iklan[$i]['filename']; ?></option> 
                                    	<?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="tanggal_tayang" id="tanggal_tayang">
                                    	<option value="0">Pilih Tanggal Tayang</option>
                                    	<?php for ($i=0; $i <count($order_jadwal) ; $i++) { ?>
                                    		<option value="<?php echo $order_jadwal[$i]['tanggal_jadwal']; ?>" class="<?php echo 'so_id'.$order_jadwal[$i]['so_id']; ?>"><?php echo $order_jadwal[$i]['tanggal_jadwal']; ?></option>
                                    	<?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="jam_tayang" id="jam_tayang">
                                    	<option value="0">Pilih Jam Tayang</option>
                                    	<?php for ($i=0; $i <count($order_jadwal) ; $i++) { ?>
                                    	<?php $pisah_jam = explode(",", $order_jadwal[$i]['waktu_jadwal']); for ($a=0; $a < count($pisah_jam) ; $a++) { ?>
				               	 		<option value="<?php echo $pisah_jam[$a];?>" class="<?php echo 'so_id'.$order_jadwal[$i]['so_id'].' '.$order_jadwal[$i]['tanggal_jadwal']; ?>"><?php echo $pisah_jam[$a]; ?></option>  <?php } } ?>
                                    </select>
                                </div>
                                <Input type="hidden" value="<?php echo $user_id ?>" name="user_id">
								<button type="submit" class="btn btn-lg btn-success btn-block">Save</button>
                            </fieldset>
                        </form>
	  </div>
	</div>
	<!--  -->
	<!-- Content Data -->
		<table class="table table-striped table-hover table-responsive" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
				  	<th>Nama Order</th>
				  	<th>Tanggal Order</th>
				  	<th>Jam Order</th>
				  	<th>User</th>
				</tr>
		  	</thead>
		  	<tbody>
		  	<?php $no=1; for ($i=0; $i <count($order_penyiaran) ; $i++) { ?>
		  		<tr>
		  			<td><?php echo $no; ?></td>
		  			<td><?php echo $order_penyiaran[$i]['so_id']; ?></td>
		  			<td><?php echo $order_penyiaran[$i]['tanggal_tayang']; ?></td>
		  			<td><?php echo $order_penyiaran[$i]['jam_tayang']; ?></td>
		  			<td><?php echo $order_penyiaran[$i]['user_id']; ?></td>
		  		</tr>
		  	<?php $no++;} ?>
		  	</tbody>
		</table>
	<!--  -->