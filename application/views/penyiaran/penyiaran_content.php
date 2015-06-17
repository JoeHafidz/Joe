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
                                    <select class="form-control" name="so_id">
                                    	<option>Pilih Order Iklan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="tanggal_tanyang">
                                    	<option value="0">Pilih Tanggal Tayang</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="jam_tayang">
                                    	<option value="0">Pilih Jam Tayang</option>
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