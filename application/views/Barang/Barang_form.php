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
								<label>Nama Barang</label>
								<input type="text" placeholder="Masukan Nama Barang" value="<?php echo $nama_barang; ?>" class="form-control" name="nama_barang">
							</div>

							<div class="form-group">
								<label>Harga Jual</label>
								<input type="text" placeholder="Masukan Harga Jual " value="<?php echo $harga_jual; ?>" class="form-control" name="harga_jual">
							</div>

							<div class="form-group">
								<label>Stok</label>
								<input type="text" placeholder="Masukan Jumlah Stok " value="<?php echo $stok; ?>" class="form-control" name="stok">
							</div>
							
							<input type="hidden" name="kode_barang" value="<?php echo $kode_barang; ?>">
							<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
							<a href="<?php echo site_url('Barang') ?>" class="btn btn-default">Cancel</a>
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

