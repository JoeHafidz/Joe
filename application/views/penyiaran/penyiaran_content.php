  	<br>
  	<!-- Input Post -->
	<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#inputCollapse" aria-expanded="false" aria-controls="inputCollapse">
	   <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
	</button>
	<br>
	<div class="collapse" id="inputCollapse">
	  <div class="well">
	    		  <form method="post" action="<?php echo base_url(); ?>user/register_new">
                            <fieldset>
                            	<div class="form-group">
                                    <select class="form-control" name="so_id" id="aso_id">
                                    	<option>Pilih Order Iklan</option>
                                    	<?php for ($i=0; $i <count($order_iklan) ; $i++) { ?>
                                    		<option value="<?php echo $order_iklan[$i]['idso']; ?>"><?php echo $order_iklan[$i]['klien_id'].' - '.$order_iklan[$i]['nama_order'].' - '.$order_iklan[$i]['filename']; ?></option> 
                                    	<?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="tanggal_tanyang" id="tanggal_tayang">
                                    	<option value="0">Pilih Tanggal Tayang</option>
                                    	<?php for ($i=0; $i <count($order_jadwal) ; $i++) { ?>
                                    		<option value="<?php echo $order_jadwal[$i]['tanggal_jadwal']; ?>"><?php echo $order_jadwal[$i]['tanggal_jadwal']; ?></option>
                                    	<?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="jam_tayang" id="jam_tayang">
                                    	<option value="0">Pilih Jam Tayang</option>
                                    	<?php for ($i=0; $i <count($order_jadwal) ; $i++) { ?>
                                    	<?php $pisah_jam = explode(",", $order_jadwal[$i]['waktu_jadwal']); for ($a=0; $a < count($pisah_jam) ; $a++) { ?>
				               	 		<option value="<?php echo $pisah_jam[$a];?>"><?php echo $pisah_jam[$a]; ?></option>  <?php } } ?>
                                    </select>
                                </div>
								<button type="submit" class="btn btn-lg btn-success btn-block">Register</button>
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
				  	<th>Nama</th>
				  	<th>Perusahaan</th>
				  	<th>User</th>
				  	<th>Status</th>
				  	<th>Action</th>
				</tr>
		  	</thead>
		  	<tbody>
		  	
		  	</tbody>
		</table>
	<!--  -->