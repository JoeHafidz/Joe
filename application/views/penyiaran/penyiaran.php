<html>
<head>
	<?php $this->load->view('global/head'); ?>
</head>
<body>
<div id="wrapper">
    <?php $this->load->view('global/sidebar'); ?> 
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Content -->
                <?php $this->load->view('penyiaran/penyiaran_content'); ?>
            </div>
        </div>
</div>
<?php $this->load->view('global/footer'); ?>
	<script type="text/javascript">
      $(function() {
         $("#tanggal_tayang").chained("#so_id");
         $("#jam_tayang").chained("#tanggal_tayang");
      });
    </script>
</body>
</html>