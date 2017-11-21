<?php $this->load->view('templates/header'); 
$this->load->view('templates/navigation'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">

            <form action="<?php echo $action; ?>" method="POST">
              <div class="form-group">
              <label>Jenis Kerusakan</label>
                <input type="text" placeholder="Masukan Jenis Kerusakan" value="<?php echo $jenis_kerusakan; ?>" class="form-control" name="jenis_kerusakan">
              </div>

              <div class="form-group">
                <label>Harga Perbaikan</label>
                <input type="text" placeholder="Masukan Harga Perbaikan " value="<?php echo $harga_perbaikan; ?>" class="form-control" name="harga_perbaikan">
              </div>


              <input type="hidden" name="id_kerusakan" value="<?php echo $id_kerusakan; ?>">
              <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
              <a href="<?php echo site_url('Kerusakan') ?>" class="btn btn-default">Cancel</a>
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
<?php $this->load->view('templates/footer');?>