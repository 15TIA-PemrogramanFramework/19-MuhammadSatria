<?php 
/**
* 
*/
class Barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
		
	}
	function index()
	{
		$data['Barang']=$this->Barang_model->ambil_data();
		$this->load->view('Barang/Barang_list',$data);
	}
	function tambah(){
		$data=array(
			'nama_barang'=>set_value('nama_barang'),
			'harga_jual'=>set_value('harga_jual'),
			'stok'=>set_value('stok'),
			'kode_barang'=>set_value('kode_barang'),
			'button'=>'Tambah',
			'action'=>site_url('Barang/tambah_aksi'),

			);
		$this->load->view('Barang/barang_form',$data);
	}
	function tambah_aksi(){
		$data=array(
			'nama_barang'=>$this->input->post('nama_barang'),
			'harga_jual'=>$this->input->post('harga_jual'),
			'stok'=>$this->input->post('stok'),
			
			);
		$this->Barang_model->tambah_data($data);
		redirect(site_url('Barang'));
	}
	function delete($kode_barang){
		$this->Barang_model->hapus_data($kode_barang);
		redirect(site_url('Barang'));
	}
	function edit($kode_barang)
	{
		$brg = $this->Barang_model->ambil_data_kode_barang($kode_barang);
		$data=array(
			'nama_barang'=>set_value('nama_barang', $brg->nama_barang),
			'harga_jual'=>set_value('harga_jual', $brg->harga_jual),
			'stok'=>set_value('stok', $brg->stok),
			'kode_barang'=>set_value('kode_barang',$brg->kode_barang),
			'button'=>'Edit',
			'action'=>site_url('Barang/edit_aksi'),
			);
		$this->load->view('Barang/Barang_form',$data);
	}
	function edit_aksi()
	{
		$data=array(
			'nama_barang'=>$this->input->post('nama_barang'),
			'harga_jual'=>$this->input->post('harga_jual'),
			'stok'=>$this->input->post('stok'),

			
			);
		$kode_barang=$this->input->post('kode_barang');
		$this->Barang_model->edit_data($kode_barang,$data);
		redirect(site_url('Barang'));
	}
}
?>