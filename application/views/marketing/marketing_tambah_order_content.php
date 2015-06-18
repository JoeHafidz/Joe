<form method="post" action="<?php echo base_url(); ?>marketing/tambah_baru">

  <div class="form-group">
    <label>No Order</label>
    <input class="form-control" value="RhemaRadio/SO/<?php echo $nomer_so; ?>" disabled>
    <input type="hidden" name="noso" value="RhemaRadio/SO/<?php echo $nomer_so; ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Order</label>
    <input class="form-control"  value="<?php echo date("Y-m-d"); ?>" disabled>
    <input type="hidden" name="tanggal_order" value="<?php echo date("Y-m-d"); ?>">
  </div>

  <div class="form-group">
    <label>Pemberi Order</label>
    <select class="form-control" name="klien_id">
      <?php for ($i=0; $i <count($list_klien) ; $i++) { ?>
        <option value="<?php echo $list_klien[$i]['id_user']; ?>"><?php echo $list_klien[$i]['nama'].' - '.$list_klien[$i]['perusahaan']; ?></option>
      <?php } ?>
    </select>
  </div>

  <div class="form-group">
    <label>Nama Order</label>
    <input class="form-control" name="nama_order" required>
  </div>

  <div class="form-group">
    <label>CRP</label>
    <select class="form-control" name="crp">
        <option value="Order Baru">Order Baru</option>
        <option value="Order Lama">Order Lama</option>
    </select>
  </div>

  <div class="form-group">
    <label>Jenis Order</label>
    <select class="form-control" name="jenis_order">
      <option value="iklan">Iklan</option>
      <option value="Lowongan Pekerjaan">Lowongan Pekerjaan</option>
      <option value="adlips">Adlips</option>
      <option value="lain-lain">Lain-lain</option>
    </select>
  </div>

  <div class="form-group">
    <label>Materi Siar</label>
    <select class="form-control" name="materi_siar">
      <option value="produksi">Produksi</option>
      <option value="surat">Surat</option>
      <option value="cd">CD</option>
      <option value="lain-lain">Lain - Lain</option>
    </select>
  </div>

 <!--  <div class="form-group">
    <label>Upload File</label>
    <input type="file" name="uploadfile[]">
  </div> -->

  <div class="form-group">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <button type="submit" name="submit" class="btn btn-success align-right">Submit</button>
  </div>

</form>