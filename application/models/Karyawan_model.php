<?php 
/**
* 
*/
class Karyawan_model extends CI_Model
{
	public $nama_table 	='karyawan';
	public $id_karyawan='id_karyawan';
	public $order 		='ASC';

	function __construct()
	{
		parent::__construct();
	}
	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){
		$this->db->order_by($this->id_karyawan,$this->order);
		return $this->db->get($this->nama_table)->result();

	}
	function ambil_data_id_karyawan($id_karyawan){
		$this->db->where($this->id_karyawan,$id_karyawan);
		return $this->db->get($this->nama_table)->row();

	}
	function cek_login($username, $password){
		$this->db->where('nama_lengkap',$username);
		$this->db->where('id_karyawan',$password);
		return $this->db->get($this->nama_table)->row();

	}
	//untuk insert data seluruh mahasiswa
	function tambah_data($data){
		$this->db->insert($this->nama_table,$data);
		

	}
	//untuk hapus data seluruh mahasiswa
	function hapus_data($id_karyawan){
		$this->db->where($this->id_karyawan,$id_karyawan);
		$this->db->delete($this->nama_table);
	}
	//untuk edit data seluruh mahasiswa
	function edit_data($id_karyawan,$data){
		$this->db->where($this->id_karyawan,$id_karyawan);
		$this->db->update($this->nama_table,$data);

	}
}
 ?>