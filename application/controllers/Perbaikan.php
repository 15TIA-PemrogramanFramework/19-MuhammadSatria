<?php 
/**
* 
*/
class Perbaikan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Perbaikan_Model');
		$this->load->model('Kerusakan_Model');
		$this->load->model('Karyawan_Model');

	}

	function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['perbaikan'] = $this->Perbaikan_Model->Select_Perbaikan();
		$this->load->view('perbaikan/perbaikan_list',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

	function tambah_Perbaikan()
	{
		$data = array(
			'kode_service' => set_value('kode_service'),
			'tanggal_service' => set_value('tanggal_service'),
			'jenis_barang' => set_value('jenis_barang'),
			'merk_barang' => set_value('merk_barang'),
			'nama_pemilik' => set_value('nama_pemilik'),
			'alamat' => set_value('alamat'),
			'no_telp' => set_value('no_telp'),
			'karyawan' => $this->Karyawan_Model->ambil_data(),
			'kerusakan' => $this->Kerusakan_Model->ambil_data(),
			'button' => 'Simpan',
			'action' => site_url('Perbaikan/tambah_Perbaikan_aksi')
			);
		$this->load->view('Perbaikan/Perbaikan_form', $data);
	}

	function tambah_Perbaikan_aksi()
	{
		
		$data = array(
			'kode_service' => $this->input->post('kode_service'),
			'tanggal_service' => $this->input->post('tanggal_service'),
			'jenis_barang' => $this->input->post('jenis_barang'),
			'merk_barang' => $this->input->post('merk_barang'),
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'id_karyawan' => $this->input->post('id_karyawan'),
			'id_kerusakan' => $this->input->post('id_kerusakan'),
			);
		$this->Perbaikan_Model->tambah_data($data);
		redirect(site_url('Perbaikan'));
	}

	function delete($kode_service)
	{
		$this->Perbaikan_Model->hapus_data($kode_service);
		redirect(site_url('Perbaikan'));
	}


	function edit($kode_service)
	{
		$perbaikan=($this->Perbaikan_Model->ambil_data_id($kode_service));

		//Mencari Indeks Kerusakan
		$kerusakan=($this->Kerusakan_Model->ambil_data_id_kerusakan($perbaikan->id_kerusakan));
		$arrKerusakan = $this->Kerusakan_Model->ambil_data();
		$indexKerusakan=0; 
		foreach ($arrKerusakan as $key => $value) {
			if($value->jenis_kerusakan == $kerusakan->jenis_kerusakan){
				break;
			}
			else{
				$indexKerusakan++;
			}
		}

		//Mencari Indeks Petugas
		$karyawan=($this->Karyawan_Model->ambil_data_id_karyawan($perbaikan->id_karyawan));
		$arrKaryawan = $this->Karyawan_Model->ambil_data();
		$indexKaryawan=0; 
		foreach ($arrKaryawan as $key => $value) {
			if($value->nama_lengkap == $karyawan->nama_lengkap){
				break;
			}
			else{
				$indexKaryawan++;
			}
		}

		$data = array(
			'kode_service' => set_value('kode_service',$perbaikan->kode_service),
			'tanggal_service' => set_value('tanggal_service',$perbaikan->tanggal_service),
			'jenis_barang' => set_value('jenis_barang', $perbaikan->jenis_barang),
			'merk_barang' => set_value('merk_barang', $perbaikan->merk_barang),
			'nama_pemilik' => set_value('nama_pemilik',$perbaikan->nama_pemilik),
			'alamat' => set_value('alamat', $perbaikan->alamat),
			'no_telp' => set_value('no_telp', $perbaikan->no_telp),

			'nomor_kerusakan' => set_value('nomor_kerusakan',$indexKerusakan),
			'nomor_karyawan' => set_value('nomor_karyawan',$indexKaryawan),

			'karyawan' => $this->Karyawan_Model->ambil_data(),
			'kerusakan' => $this->Kerusakan_Model->ambil_data(),

			'button' => 'Edit',
			'action' => site_url('perbaikan/edit_aksi')
			);
		$this->load->view('perbaikan/Perbaikan_form', $data);
	}

	function edit_aksi()
	{
		
		$data = array(
			'tanggal_service' => $this->input->post('tanggal_service'),
			'jenis_barang' => $this->input->post('jenis_barang'),
			'merk_barang' => $this->input->post('merk_barang'),
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),

			'id_karyawan' => $this->input->post('id_karyawan'),
			'id_kerusakan' => $this->input->post('id_kerusakan'),
			
			
			);
		$kode_service = $this->input->post('kode_service');
		$this->Perbaikan_Model->edit_data($kode_service,$data);
		redirect(site_url('perbaikan'));
	}

}
?>