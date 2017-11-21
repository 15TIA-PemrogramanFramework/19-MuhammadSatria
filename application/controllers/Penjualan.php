<?php 
/**
* 
*/
class Penjualan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Penjualan_Model');
		$this->load->model('Barang_Model');
		$this->load->model('Karyawan_Model');
			
	}
	function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['penjualan'] = $this->Penjualan_Model->Select_Penjualan();
		$this->load->view('penjualan/penjualan_list',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}


	function tambah_Penjualan()
	{
		$data = array(
			'kode_jual' => set_value('kode_jual'),
			'tanggal' => set_value('tanggal'),
			'jumlah_barang' => set_value('jumlah_barang'),
			'total' => set_value('total'),
			'karyawan' => $this->Karyawan_Model->ambil_data(),
			'barang' => $this->Barang_Model->ambil_data(),
			'button' => 'Simpan',
			'action' => site_url('Penjualan/tambah_Penjualan_aksi')
			);
		$this->load->view('Penjualan/Penjualan_form', $data);
	}

	function tambah_Penjualan_aksi()
	{
		$barang = $this->Barang_Model->ambil_data_kode_barang($this->input->post('kode_barang'));
		$jumlah_barang = $this->input->post('jumlah_barang');
		$harga = $barang->harga_jual;
		$data = array(
			'kode_jual' => $this->input->post('kode_jual'),
			'tanggal' => $this->input->post('tanggal'),
			'id_karyawan' => $this->input->post('id_karyawan'),
			'kode_barang' => $this->input->post('kode_barang'),
			'jumlah_barang' => $this->input->post('jumlah_barang'),
			'total' => ($jumlah_barang*$harga),
			);
		$this->Penjualan_Model->tambah_data($data);
		redirect(site_url('Penjualan'));
	}

	function delete($kode_jual)
	{
		$this->Penjualan_Model->hapus_data($kode_jual);
		redirect(site_url('Penjualan'));
	}
	

function edit($kode_jual)
	{
		$penjualan=($this->Penjualan_Model->ambil_data_id($kode_jual));

		//Mencari Indeks Barang
		$barang=($this->Barang_Model->ambil_data_kode_barang($penjualan->kode_barang));
		$arrBarang = $this->Barang_Model->ambil_data();
		$indexBarang=0; 
		foreach ($arrBarang as $key => $value) {
			if($value->nama_barang == $barang->nama_barang){
				break;
			}
			else{
				$indexBarang++;
			}
		}

		//Mencari Indeks Petugas
		$karyawan=($this->Karyawan_Model->ambil_data_id_karyawan($penjualan->id_karyawan));
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
			'tanggal' => set_value('tanggal',$penjualan->tanggal),
			'karyawan' => $this->Karyawan_Model->ambil_data(),
			'barang' => $this->Barang_Model->ambil_data(),
			'kode_jual' => set_value('kode_jual',$penjualan->kode_jual),
			'nomor_barang' => set_value('nomor_barang',$indexBarang),
			'nomor_karyawan' => set_value('nomor_karyawan',$indexKaryawan),
			'jumlah_barang' => set_value('jumlah_barang', $penjualan->jumlah_barang),
			'total' => set_value('total', $penjualan->total),
			'button' => 'Edit',
			'action' => site_url('penjualan/edit_aksi')
			);
		$this->load->view('penjualan/Penjualan_form', $data);
	}

	function edit_aksi()
	{
		$barang = $this->Barang_Model->ambil_data_kode_barang($this->input->post('kode_barang'));
		$jumlah_barang = $this->input->post('jumlah_barang');
		$harga = $barang->harga_jual;
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'id_karyawan' => $this->input->post('id_karyawan'),
			'kode_barang' => $this->input->post('kode_barang'),
			'jumlah_barang' => $this->input->post('jumlah_barang'),
			'total' => ($jumlah_barang*$harga),
			'tanggal' => $this->input->post('tanggal'),
			);
		$kode_jual = $this->input->post('kode_jual');
		$this->Penjualan_Model->edit_data($kode_jual,$data);
		redirect(site_url('penjualan'));
	}




}
?>