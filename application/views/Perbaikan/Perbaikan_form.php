<?php $this->load->view('templates/header'); 
$this->load->view('templates/navigation'); ?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">

                                    <h4 class="title">Data Service</h4>
                                    <br>

                                    <form action="<?php echo $action; ?>" method="POST">

                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal_service" value="<?php echo $tanggal_service;?>" class="form-control pull-right" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>Jenis Barang</label>
                                        <input type="text" name="jenis_barang" value="<?php echo $jenis_barang;?>" class="form-control pull-right" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>Merk Barang</label>
                                        <input type="text" name="merk_barang" value="<?php echo $merk_barang;?>" class="form-control pull-right" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Pemilik</label>
                                        <input type="text" name="nama_pemilik" value="<?php echo $nama_pemilik;?>" class="form-control pull-right" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" value="<?php echo $alamat;?>" class="form-control pull-right" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>No Telp</label>
                                        <input type="text" name="no_telp" value="<?php echo $no_telp;?>" class="form-control pull-right" placeholder="">
                                    </div>

                                      <div class="form-group">
                                         <label>ID karyawan</label>
                                         <select class="form-control select2" name="id_karyawan" id="karyawan" style="width: 100%;">
                                            <?php foreach ($karyawan as $key => $value) { ?>
                                               <option value="<?php echo $value->id_karyawan; ?>"><?php echo $value->id_karyawan;?></option>
                                               <?php } ?>
                                           </select>
                                       </div>
                                       
                                    <div class="form-group">
                                        <label>Jenis Kerusakan</label>
                                        <select class="form-control select2" name="id_kerusakan" id="kerusakan" style="width: 100%;">
                                           <?php foreach ($kerusakan as $key => $value) { ?>
                                              <option value="<?php echo $value->id_kerusakan; ?>"><?php echo $value->jenis_kerusakan;?></option>
                                              <?php } ?>
                                          </select>
                                      </div>
                                  
                              </div>
                              <input type="hidden" name="kode_service" value="<?php echo $kode_service; ?>">
                              <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
                              <a href="<?php echo site_url('Perbaikan') ?>" class="btn btn-default">Cancel</a>
                          </form>

                      </tbody>
                  </table>
              </div>
          </tr>
      </thead>
  </table>

</div>
</div>
</div>
<script>
        function matchIndex() {
          var indexBarang = <?php echo $nomor_barang; ?>;
          var indexKaryawan = <?php echo $nomor_karyawan; ?>;
          document.getElementById("barang").selectedIndex = indexBarang;
          document.getElementById("karyawan").selectedIndex = indexKaryawan;
        }
      </script> 
<?php $this->load->view('templates/footer');?>