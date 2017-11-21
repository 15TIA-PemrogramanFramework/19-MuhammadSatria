<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
function generate_sidemenu()
{
	return 
	'<li>
	<a href="'.site_url('home').'">
		<i class="fa fa-Home"></i> Home</a>
	</li>
	<li>
		<a href="'.site_url('barang').'">
			<i class="fa fa-user"></i> Data Barang</a>
	</li>
	<li>
		<a href="'.site_url('karyawan').'">
			<i class="fa fa-user"></i> Data Karyawan</a>
	</li>
	<li>
		<a href="'.site_url('supplier').'">
			<i class="fa fa-user"></i> Data Supplier</a>
	</li>
	<li>
		<a href="'.site_url('penjualan').'">
			<i class="fa fa-user"></i> Data Penjualan</a>
	</li>

	</li>';
	}
