<?php 
/**
* 
*/
class Supplier_model extends CI_Model
{
	public $nama_table 	='supplier';
	public $kode_supplier='kode_supplier';
	public $order 		='DESC';

	function __construct()
	{
		parent::__construct();
	}
	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){
		$this->db->order_by($this->kode_supplier,$this->order);
		return $this->db->get($this->nama_table)->result();

	}
function ambil_data_kode_supplier($kode_supplier){
		$this->db->where($this->kode_supplier,$kode_supplier);
		return $this->db->get($this->nama_table)->row();

	}
	function cek_login($username, $password){
		$this->db->where('nama',$username);
		$this->db->where('prodi',$password);
		return $this->db->get($this->nama_table)->row();

	}

	//untuk insert data seluruh mahasiswa
	function tambah_data($data){
		$this->db->insert($this->nama_table,$data);
		

	}
	//untuk hapus data seluruh mahasiswa
	function hapus_data($kode_supplier){
		$this->db->where($this->kode_supplier,$kode_supplier);
		$this->db->delete($this->nama_table);

		

	}
	//untuk edit data seluruh mahasiswa
	function edit_data($kode_supplier,$data){
		$this->db->where($this->kode_supplier,$kode_supplier);
		$this->db->update($this->nama_table,$data);

	}

}
 ?>