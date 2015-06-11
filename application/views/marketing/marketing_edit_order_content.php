<form method="post" action="<?php echo base_url(); ?>marketing/edit_order_run">

  <div class="form-group">
    <label>No Order</label>
    <input class="form-control" value="<?php echo $detail_order_edit[0]['noso']; ?>" disabled>
    <input type="hidden" name="noso" value="<?php echo $detail_order_edit[0]['noso']; ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Order</label>
    <input class="form-control"  value="<?php echo $detail_order_edit[0]['tanggal_order']; ?>" disabled>
    <input type="hidden" name="tanggal_order" value="<?php echo $detail_order_edit[0]['tanggal_order']; ?>">
  </div>

  <div class="form-group">
    <label>Pemberi Order</label>
    <input class="form-control" name="pemberi_order" value="<?php echo $detail_order_edit[0]['pemberi_order']; ?>">
  </div>

  <div class="form-group">
    <label>Perusahaan</label>
    <input class="form-control" name="perusahaan" value="<?php echo $detail_order_edit[0]['perusahaan']; ?>">
  </div>

  <div class="form-group">
    <label>Alamat Perusahaan</label>
    <input class="form-control" name="alamat_perusahaan" value="<?php echo $detail_order_edit[0]['alamat_perusahaan']; ?>">
  </div>

  <div class="form-group">
    <label>CRP</label> awal : <?php echo $detail_order_edit[0]['crp']; ?>
    <select class="form-control" name="crp">
        <option value="Order Baru">Order Baru</option>
        <option value="Order Lama">Order Lama</option>
    </select>
  </div>

  <div class="form-group">
    <label>Jenis Order</label> awal : <?php echo $detail_order_edit[0]['jenis_order']; ?>
    <select class="form-control" name="jenis_order">
      <option value="iklan">Iklan</option>
      <option value="Lowongan Pekerjaan">Lowongan Pekerjaan</option>
      <option value="adlips">Adlips</option>
      <option value="lain-lain">Lain-lain</option>
    </select>
  </div>

  <div class="form-group">
    <label>Materi Siar</label> awal : <?php echo $detail_order_edit[0]['materi_siar']; ?>
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
    <input type="hidden" name="idso" value="<?php echo $detail_order_edit[0]['idso']; ?>">
    <button type="submit" name="submit" class="btn btn-success align-right">Save</button>
  </div>

</form>