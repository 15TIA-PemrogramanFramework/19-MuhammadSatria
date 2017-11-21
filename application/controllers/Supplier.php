<?php 
/**
* 
*/
class Supplier extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Supplier_model');
		
	}
	function index()
	{
		$data['Supplier']=$this->Supplier_model->ambil_data();
		$this->load->view('Supplier/Supplier_list',$data);
	}
	function tambah(){
		$data=array(
			'nama_supplier'=>set_value('nama_supplier'),
			'alamat'=>set_value('alamat'),
			'no_telp'=>set_value('no_telp'),
			'kode_supplier'=>set_value('kode_supplier'),
			'button'=>'Tambah',
			'action'=>site_url('Supplier/tambah_aksi'),

			);
		$this->load->view('Supplier/supplier_form',$data);
	}
	function tambah_aksi(){
		$data=array(
			'nama_supplier'=>$this->input->post('nama_supplier'),
			'alamat'=>$this->input->post('alamat'),
			'no_telp'=>$this->input->post('no_telp'),
			
	);
		$this->Supplier_model->tambah_data($data);
		redirect(site_url('Supplier'));
}
function delete($kode_supplier){
	$this->Supplier_model->hapus_data($kode_supplier);
	redirect(site_url('Supplier'));
}
function edit($kode_supplier)
{
	$splr = $this->Supplier_model->ambil_data_kode_supplier($kode_supplier);
	$data=array(
			'nama_supplier'=>set_value('nama_supplier', $splr->nama_supplier),
			'alamat'=>set_value('alamat', $splr->alamat),
			'no_telp'=>set_value('no_telp', $splr->no_telp),
			
			'kode_supplier'=>set_value('kode_supplier',$splr->kode_supplier),
			'button'=>'Edit',
			'action'=>site_url('Supplier/edit_aksi'),
			);
	$this->load->view('Supplier/Supplier_form',$data);
}
function edit_aksi()
{
$data=array(
			'nama_supplier'=>$this->input->post('nama_supplier'),
			'alamat'=>$this->input->post('alamat'),
			'no_telp'=>$this->input->post('no_telp'),
			
	);
	$kode_supplier=$this->input->post('kode_supplier');
		$this->Supplier_model->edit_data($kode_supplier,$data);
		redirect(site_url('Supplier'));
}
}
 ?>