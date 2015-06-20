<html>
<head>
    <?php $this->load->view('global/head'); ?>
</head>
<body>
<div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Content -->
                
<table class="table table-striped table-hover table-responsive" id="dataTable">
      <thead>
        <tr>
          <th>No</th>
            <th>Nama Order</th>
            <th>Tanggal Siar</th>
            <th>Jam Siar</th>
            <th>Penyiar</th>
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
            </div>
        </div>
</div>
<?php $this->load->view('global/footer'); ?>
</body>
</html>
