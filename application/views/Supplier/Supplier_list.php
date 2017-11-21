<?php $this->load->view('templates/header'); 
$this->load->view('templates/navigation'); 
$status = $this->session->userdata('status');?>
<div class="row">
	<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
		<?php
		echo anchor(site_url("Supplier/tambah"),'<i class ="fa fa-plus"></i>Tambah Data','class="btn btn-primary"');?>
	</div>
</div>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Data Supplier</h4>
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
													<th style="text-align:center; vertical-align:middle;">Id Supplier</th>
													<th style="text-align:center; vertical-align:middle;">Nama Supplier</th>
													<th style="text-align:center; vertical-align:middle;">Alamat</th>
													<th style="text-align:center; vertical-align:middle;">No Telp</th>
													<?php if($status == 'admin') { ?>
														<th style="text-align:center; vertical-align:middle;">Aksi</th>
														<?php } ?>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($Supplier as $key => $value) {?>
														<tr>
															<td align="center" style="vertical-align:middle;"><?php echo $key+1; ?></td>
															<td align="center" style="vertical-align:middle;"><?php echo $value->kode_supplier; ?></td>
															<td align="center" style="vertical-align:middle;"><?php echo $value->nama_supplier; ?></td>
															<td align="center" style="vertical-align:middle;"><?php echo $value->alamat; ?></td>
															<td align="center" style="vertical-align:middle;"><?php echo $value->no_telp; ?></td>
															<?php if($status == 'admin') { ?>
																<td align="center" style="vertical-align:middle;">
																	<?php echo anchor(site_url('Supplier/edit/'.$value->kode_supplier),
																		'<i class="fa fa-pencil"></i>',
																		'class="btn btn-warning"'); ?>

																	<?php echo anchor(site_url('Supplier/delete/'.$value->kode_supplier),
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