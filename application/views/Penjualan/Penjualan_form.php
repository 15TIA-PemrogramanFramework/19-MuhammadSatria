<?php $this->load->view('templates/header'); 
$this->load->view('templates/navigation'); ?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">

                                    <h4 class="title">Data Penjualan</h4>
                                    <br>

                                    <form action="<?php echo $action; ?>" method="POST">

                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" value="<?php echo $tanggal;?>" class="form-control pull-right" placeholder="">
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
                                        <label>Nama Barang</label>
                                        <select class="form-control select2" name="kode_barang" id="barang" style="width: 100%;">
                                           <?php foreach ($barang as $key => $value) { ?>
                                              <option value="<?php echo $value->kode_barang; ?>"><?php echo $value->nama_barang;?></option>
                                              <?php } ?>
                                          </select>
                                      </div>
                                    <div class="form-group">
                                      <label>Jumlah Barang :</label>
                                      <input type="number" class="form-control reset" 
                                        autocomplete="off" onchange="subTotal(this.value)" 
                                        onkeyup="subTotal(this.value)" id="jumlah_barang" min="0" 
                                        name="jumlah_barang" placeholder="" value="<?php echo $jumlah_barang ?>">
                                    </div>
                                  
                              </div>
                              <input type="hidden" name="kode_jual" value="<?php echo $kode_jual; ?>">
                              <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
                              <a href="<?php echo site_url('Penjualan') ?>" class="btn btn-default">Cancel</a>
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