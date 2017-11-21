<?php 
/**
* 
*/
class Karyawan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_model');
		
	}
	function index()
	{
		$data['Karyawan']=$this->Karyawan_model->ambil_data();
		$this->load->view('Karyawan/Karyawan_list',$data);
	}
	function tambah(){
		$data=array(
			'nama_lengkap'=>set_value('nama_lengkap'),
			'alamat_karyawan'=>set_value('alamat_karyawan'),
			'jenis_kelamin'=>set_value('jenis_kelamin'),
			'email'=>set_value('email'),
			'no_telp'=>set_value('no_telp'),
			'id_karyawan'=>set_value('id_karyawan'),
			'button'=>'Tambah',
			'action'=>site_url('Karyawan/tambah_aksi'),

			);
		$this->load->view('Karyawan/karyawan_form',$data);
	}
	function tambah_aksi(){
		$data=array(
			'nama_lengkap'=>$this->input->post('nama_lengkap'),
			'alamat_karyawan'=>$this->input->post('alamat_karyawan'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'email'=>$this->input->post('email'),
			'no_telp'=>$this->input->post('no_telp'),
	);
		$this->Karyawan_model->tambah_data($data);
		redirect(site_url('Karyawan'));
}
function delete($id_karyawan){
	$this->Karyawan_model->hapus_data($id_karyawan);
	redirect(site_url('Karyawan'));
}
function edit($id_karyawan)
{
	$krwn = $this->Karyawan_model->ambil_data_id_karyawan($id_karyawan);
	$data=array(
			'nama_lengkap'=>set_value('nama_lengkap', $krwn->nama_lengkap),
			'alamat_karyawan'=>set_value('alamat_karyawan', $krwn->alamat_karyawan),
			'jenis_kelamin'=>set_value('jenis_kelamin', $krwn->jenis_kelamin),
			'email'=>set_value('email',$krwn->email),
			'no_telp'=>set_value('no_telp',$krwn->no_telp),
			'id_karyawan'=>set_value('id_karyawan',$krwn->id_karyawan),
			'button'=>'Edit',
			'action'=>site_url('Karyawan/edit_aksi'),
			);
	$this->load->view('Karyawan/Karyawan_form',$data);
}
function edit_aksi()
{
$data=array(
			'nama_lengkap'=>$this->input->post('nama_lengkap'),
			'alamat_karyawan'=>$this->input->post('alamat_karyawan'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'email'=>$this->input->post('email'),
			'no_telp'=>$this->input->post('no_telp'),

			
	);
	$id_karyawan=$this->input->post('id_karyawan');
		$this->Karyawan_model->edit_data($id_karyawan,$data);
		redirect(site_url('Karyawan'));
}
}
 ?>