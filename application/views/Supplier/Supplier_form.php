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
		<label>Nama supplier</label>
		<input type="text" placeholder="Masukan Nama Lengkap" value="<?php echo $nama_supplier; ?>" class="form-control" name="nama_supplier">
	</div>

	<div class="form-group">
		<label>Alamat</label>
		<input type="text" placeholder="Masukan Nama Lengkap" value="<?php echo $alamat; ?>" class="form-control" name="alamat">
	</div>

	<div class="form-group">
		<label>No_telp</label>
		<input type="text" placeholder=" " value="<?php echo $no_telp; ?>" class="form-control" name="no_telp">
	</div>

<input type="hidden" name="kode_supplier" value="<?php echo $kode_supplier; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('Supplier') ?>" class="btn btn-default">Cancel</a>
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