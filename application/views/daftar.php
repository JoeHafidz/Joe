<html>
<head>
	<?php $this->load->view('global/head'); ?>
</head>
<body>

    <div class="container">
        <div class="row">

            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $error; ?></h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url(); ?>daftar/register_new">
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
                                <input type="hidden" name="level_user" value="klien">
                                <!-- Change this to a button or input when using this as a form -->
								<button type="submit" class="btn btn-lg btn-success btn-block">Register</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('global/footer'); ?>
</body>
</html>