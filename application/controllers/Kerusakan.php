<?php 
/**
* 
*/
class Kerusakan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Kerusakan_model');
		
	}

	function index()
	{
		$data['Kerusakan']=$this->Kerusakan_model->ambil_data();
		$this->load->view('Kerusakan/Kerusakan_list',$data);
	}

	function tambah(){
		$data=array(
			'jenis_kerusakan'=>set_value('jenis_kerusakan'),
			'harga_perbaikan'=>set_value('harga_perbaikan'),
			'id_kerusakan'=>set_value('id_kerusakan'),
			'button'=>'Tambah',
			'action'=>site_url('Kerusakan/tambah_aksi'),

			);
		$this->load->view('Kerusakan/kerusakan_form',$data);
	}

	function tambah_aksi(){
		$data=array(
			'jenis_kerusakan'=>$this->input->post('jenis_kerusakan'),
			'harga_perbaikan'=>$this->input->post('harga_perbaikan'),
			
			);
		$this->Kerusakan_model->tambah_data($data);
		redirect(site_url('Kerusakan'));
	}

	function delete($id_kerusakan){
		$this->Kerusakan_model->hapus_data($id_kerusakan);
		redirect(site_url('Kerusakan'));
	}

	function edit($id_kerusakan)
	{
		$krskn = $this->Kerusakan_model->ambil_data_id_kerusakan($id_kerusakan);
		$data=array(
			'jenis_kerusakan'=>set_value('jenis_kerusakan', $krskn->jenis_kerusakan),
			'harga_perbaikan'=>set_value('harga_perbaikan', $krskn->harga_perbaikan),
			'id_kerusakan'=>set_value('id_kerusakan',$krskn->id_kerusakan),
			'button'=>'Edit',
			'action'=>site_url('Kerusakan/edit_aksi'),
			);
		$this->load->view('Kerusakan/Kerusakan_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'jenis_kerusakan'=>$this->input->post('jenis_kerusakan'),
			'harga_perbaikan'=>$this->input->post('harga_perbaikan'),

			
			);
		$id_kerusakan=$this->input->post('id_kerusakan');
		$this->Kerusakan_model->edit_data($id_kerusakan,$data);
		redirect(site_url('Kerusakan'));
	}

}

 ?>