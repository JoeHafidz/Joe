  	<br>
  	<!-- Input Post -->
	<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#inputCollapse" aria-expanded="false" aria-controls="inputCollapse">
	   <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
	</button>
	<br>
	<div class="collapse" id="inputCollapse">
	  <div class="well">
	    		  <form method="post" action="<?php echo base_url(); ?>marketing/register_new">
                            <fieldset>
                            	<div class="form-group">
                                    <input class="form-control" placeholder="Nama" name="nama" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Perusahaan" name="perusahaan" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Alamat Perusahaan" name="alamat_perusahaan" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                	<input type="hidden" name="level_user" value="klien">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
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
				  	<th>Nama</th>
				  	<th>Perusahaan</th>
				  	<th>User</th>
				  	<th>Status</th>
				  	<th>Action</th>
				</tr>
		  	</thead>
		  	<tbody>
		  	<?php $no=1; for ($i=0; $i <count($show_user_data) ; $i++) { ?>
		  		<tr>
		  			<td><?php echo $no ?></td>
				  	<td><?php echo $show_user_data[$i]['nama']; ?></td>
				  	<td><?php echo $show_user_data[$i]['perusahaan']; ?></td>
				  	<td><?php echo $show_user_data[$i]['username']; ?></td>
				  	<td><?php echo $show_user_data[$i]['level_user']; ?></td>
				  	<td>
				  		<a href="<?php echo site_url("marketing/delete/". $show_user_data[$i]["id_user"]); ?>" class="btn btn-default btn-sm glyphicon glyphicon-trash" role="button"></a>
				  	</td>
			  	</tr>
		  	<?php $no++;} ?>
		  	</tbody>
		</table>
	<!--  -->