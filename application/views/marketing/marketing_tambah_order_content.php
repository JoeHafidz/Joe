<form method="post" action="marketing/tambah_baru">

  <div class="form-group">
    <label>No Order</label>
    <input class="form-control" name="noso" value="RhemaRadio/SO/<?php echo $nomer_so; ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Order</label>
    <input class="form-control" name="tanggal_order" value="<?php echo date("Y-m-d"); ?>">
  </div>

  <div class="form-group">
    <label>Pemberi Order</label>
    <input class="form-control" name="pemberi_order">
  </div>

  <div class="form-group">
    <label>Perusahaan</label>
    <input class="form-control" name="perusahaan">
  </div>

  <div class="form-group">
    <label>Alamat Perusahaan</label>
    <input class="form-control" name="alamat_perusahaan">
  </div>

  <div class="form-group">
    <label>CRP</label>
    <select class="form-control" name="crp">
        <option value="baru">Order Baru</option>
        <option value="lama">Order Lama</option>
    </select>
  </div>

  <div class="form-group">
    <label>Jenis Order</label>
    <select class="form-control" name="jenis_order">
      <option value="0">--Pilih--</option>
      <option value="iklan">Iklan</option>
      <option value="loker">Lowongan Pekerjaan</option>
      <option value="adlips">Adlips</option>
      <option value="lain-lain">Lain - Lain</option>
    </select>
  </div>

  <div class="form-group">
    <label>Materi Siar</label>
    <select class="form-control" name="materi_siar">
      <option value="0">--Pilih--</option>
      <option value="produksi">Produksi</option>
      <option value="surat">Surat</option>
      <option value="cd">CD</option>
      <option value="lain-lain">Lain - Lain</option>
    </select>
  </div>

  <div class="form-group">
    <label>Upload File</label>
    <input type="file" name="uploadfile[]">
  </div>


  <div class="form-group">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <button type="submit" name="submit" class="btn btn-success align-right">Submit</button>
  </div>

</form>