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
                <h1 class="page-header">Sales Order</h1>
                <?php $this->load->view('marketing/marketing_edit_order_content'); ?>
            </div>
        </div>
</div>
<?php $this->load->view('global/footer'); ?>

</body>
</html>