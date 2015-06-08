<form method="post" action="<?php echo base_url(); ?>marketing/tambah_baru">
    <table width='100%'>
    <h2 class="text-center">SALES ORDER</h2>
 <tr>
          <td>
            <div class="form-group form-group-sm">
              <label class="col-sm-2 control-label" for="formGroupInputSmall">No Order</label>
              <div class="col-sm-10">
              <input class="form-control" type="text" id="formGroupInputSmall" placeholder="">
              </div>
            </div>
          </td>
 </tr>

  <tr>
          <td>
            <div class="form-group form-group-sm">
              <label class="col-sm-2 control-label" for="formGroupInputSmall">Tanggal Order</label>
              <div class="col-sm-10">
              <input class="form-control" type="text" id="formGroupInputSmall" placeholder="">
              </div>
            </div>
          </td>
 </tr>

 <tr>
          <td>
              <div class="form-group form-group-sm">
              <label class="col-sm-2 control-label" for="formGroupInputSmall">Pemberi Order</label>
              <div class="col-sm-10">
              <input class="form-control" type="text" id="formGroupInputSmall" placeholder="">
              </div>
              </div>
          </td>
 </tr>

<tr>
          <td>
            <div class="form-group form-group-sm">
              <label class="col-sm-2 control-label" for="formGroupInputSmall">Perusahaan</label>
              <div class="col-sm-10">
              <input class="form-control" type="text" id="formGroupInputSmall" placeholder="">
              </div>
              </div>
          </td>
 </tr>

<tr>
          <td>
            <div class="form-group form-group-sm">
              <label class="col-sm-2 control-label" for="formGroupInputSmall">Alamat Perusahaan</label>
              <div class="col-sm-10">
              <textarea class="form-control" rows="3"></textarea>
              </div>
              </div>
          </td>
 </tr>

 <tr>
          <td>
            <div class="form-group form-group-sm">
            <label class="col-sm-2 control-label" for="formGroupInputSmall">CRP</label>
            <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Order Baru
            </label>
            <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Order Ulang
            </label>
            </div>
          </td>
 </tr>

 <tr>
         <td>
            <div class="form-group form-group-sm">
            <label class="col-sm-2 control-label" for="formGroupInputSmall">Jenis Order</label>
            <div class="col-sm-4">
            <select class="form-control">
            <option>Iklan</option>
            <option>Lowongan Pekerjaan</option>
            <option>Adlips</option>
            <option>Lain-lain</option>
            </select>
            </div>
            </div>
          </td> 
 </tr>

 <tr>
         <td>
            <div class="form-group form-group-sm">
            <label class="col-sm-2 control-label" for="formGroupInputSmall">Materi Siar</label>
            <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox1" value="option1"> Produksi
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox2" value="option2"> Surat
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox3" value="option3"> CD
            </label>
             <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox3" value="option3"> Lain-lain
            </label>
            </div>
            </td> 
 </tr>

<!-- <tr>
          <td>
              <div class="form-group form-group-sm">
              <label class="col-sm-2 control-label" for="formGroupInputSmall">Tanggal Siar</label>
              <div class="col-sm-10">
              <input class="form-control" type="text" id="formGroupInputSmall" placeholder="">
              </div>
              </div>
          </td>
 </tr>

 <tr>
          <td>
              <div class="form-group form-group-sm">
              <label class="col-sm-2 control-label" for="formGroupInputSmall">Jumlah Siar</label>
              <div class="col-sm-10">
              <input class="form-control" type="text" id="formGroupInputSmall" placeholder="">
              </div>
              </div>
          </td>
 </tr>

 <tr>
          <td>
              <div class="form-group form-group-sm">
              <label class="col-sm-2 control-label" for="formGroupInputSmall">Status SO</label>
              <div class="col-sm-10">
              <input class="form-control" type="text" id="formGroupInputSmall" placeholder="">
              </div>
              </div>
          </td>
 </tr>

 <tr>
          <td>
              <div class="form-group form-group-sm">
              <label class="col-sm-2 control-label" for="formGroupInputSmall">Approve</label>
              <div class="col-sm-10">
              <input class="form-control" type="text" id="formGroupInputSmall" placeholder="">
              </div>
              </div>
          </td>
 </tr>
 -->


 <tr>
          <td>
          </td>
          <td>
            <a class="btn btn-success" href="<?php echo base_url(); ?>marketing/simpan_sales_order" role="button">Simpan</a>
          </td>
 </tr>
 
</table>

  </form>
