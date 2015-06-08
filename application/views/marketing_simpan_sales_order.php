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
                <?php $this->load->view('marketing_simpan_sales_order_content'); ?>
            </div>
        </div>
</div>
<?php $this->load->view('global/footer'); ?>
</body>
</html>