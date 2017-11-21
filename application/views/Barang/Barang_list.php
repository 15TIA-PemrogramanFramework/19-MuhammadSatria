
<?php

$this->load->view('templates/header'); 
$this->load->view('templates/navigation'); 
$status = $this->session->userdata('status');
?>

<div class="row">
	<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
		<?php
		echo anchor(site_url("Barang/tambah"),'<i class ="fa fa-plus"></i>Tambah Data','class="btn btn-primary"');?>
	</div>
</div>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Data Barang</h4>
						<br>

					</div>
					<section class="content">
						<div class="row">
							<div class="col-xs-12">
								<div class="box">
									<!-- /.box-header -->
									<div class="box-body">
										<table id="example1" class="table table-bordered table-hover">

											<thead>
												<tr>
													<th style="text-align:center; vertical-align:middle;">No</th>
													<th style="text-align:center; vertical-align:middle;">Kode Barang</th>
													<th style="text-align:center; vertical-align:middle;">Nama Barang</th>
													<th style="text-align:center; vertical-align:middle;">Harga Jual</th>
													<th style="text-align:center; vertical-align:middle;">Stok</th>
													<?php if($status == 'admin') { ?>
													<th style="text-align:center; vertical-align:middle;">Aksi</th>
													<?php } ?>
												</tr>
											</thead>
											<tbody>

												<?php foreach ($Barang as $key => $value) {?>
													<tr>
														<td align="center" style="vertical-align:middle;"><?php echo $key+1; ?></td>
														<td align="center" style="vertical-align:middle;"><?php echo $value->kode_barang; ?></td>
														<td align="center" style="vertical-align:middle;"><?php echo $value->nama_barang; ?></td>
														<td align="center" style="vertical-align:middle;"><?php echo $value->harga_jual; ?></td>
														<td align="center" style="vertical-align:middle;"><?php echo $value->stok; ?></td>
														<?php if($status == 'admin') { ?>
														<td align="center" style="vertical-align:middle;">
															<?php echo anchor(site_url('Barang/edit/'.$value->kode_barang),
																'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>',
																'class="btn btn-warning"'); ?>

															<?php echo anchor(site_url('Barang/delete/'.$value->kode_barang),
																'<i class="fa fa-trash"></i>',
																'class="btn btn-danger"'); ?>
														</td> 
														<?php } ?>
													</tr> 
													<?php } ?>
												</tbody>
											</table>
										</div>
									</tr>
								</thead>
							</table>

						</div>
						
					</section>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
$this->load->view('templates/footer');
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>