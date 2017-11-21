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
		<label>Nama Lengkap</label>
		<input type="text" placeholder="Masukan Nama Lengkap" value="<?php echo $nama_lengkap; ?>" class="form-control" name="nama_lengkap">
	</div>
	
	<div class="form-group">
		<label>Alamat Karyawan</label>
		<input type="text" placeholder="Masukan Alamat Lengkap" value="<?php echo $alamat_karyawan; ?>" class="form-control" name="alamat_karyawan">
	</div>

	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input type="text" placeholder=" " value="<?php echo $jenis_kelamin; ?>" class="form-control" name="jenis_kelamin">
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="text" placeholder="Masukan Alamat Email " value="<?php echo $email; ?>" class="form-control" name="email">
	</div>
	<div class="form-group">
		<label>No Telp</label>
		<input type="text" placeholder="+628xxxxxxxx " value="<?php echo $no_telp; ?>" class="form-control" name="no_telp">
	</div>

	
	<input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('Karyawan') ?>" class="btn btn-default">Cancel</a>
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