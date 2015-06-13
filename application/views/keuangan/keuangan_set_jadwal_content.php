<br>
      <div class="row">
        <div class="col-md-8">
          <div class="panel panel-success">
          <div class="panel-heading">Input Jadwal Siar</div>
            <div class="panel-body">
                <form method="post" action="<?php echo base_url(); ?>keuangan/simpan_jadwal">
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input class="form-control datepicker" name="tanggal_jadwal">
                  </div>
                  <div class="form-group">
                    <label>Waktu</label>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="07.00">
                          07.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="08.00">
                          08.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="09.00">
                          09.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="10.00">
                          10.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="11.00">
                          11.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="12.00">
                          12.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="13.00">
                          13.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="14.00">
                          14.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="15.00">
                          15.00
                        </label>
                      </div>
                        </div>
                        <div class="col-md-6">
                          <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="16.00">
                          16.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="17.00">
                          17.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="18.00">
                          18.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="19.00">
                          19.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="20.00">
                          20.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="21.00">
                          21.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="22.00">
                          22.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="23.00">
                          23.00
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="waktu[]" value="24.00">
                          24.00
                        </label>
                      </div>
                        </div>
                      </div>
                  </div>

                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <input type="hidden" name="so_id" value="<?php echo $detail_order[0]['idso']; ?>">
                <button class="btn btn-outline btn-primary" type="submit">Save</button>
              </form> 
            </div>
            <div class="panel-footer">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-success">
          <div class="panel-heading">Jadwal Siar</div>
            <div class="panel-body">
              
            </div></div>
        </div>
      </div>
