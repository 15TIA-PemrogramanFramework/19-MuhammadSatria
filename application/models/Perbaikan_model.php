<?php 
/**
* 
*/
class Perbaikan_model extends CI_Model
{
	public $nama_table 		='perbaikan';
	public $kode_service	='kode_service';
	public $order 			='ASC';

	function __construct()
	{
		parent::__construct();
	}

	function Select_Perbaikan()
 	{
 		$this->db->distinct();
 		$this->db->select('p.kode_service, p.tanggal_service, p.jenis_barang, p.merk_barang, p.nama_pemilik, p.alamat, p.no_telp, kr.jenis_kerusakan, kr.harga_perbaikan, k.nama_lengkap');
 		$this->db->from('perbaikan p');
 		$this->db->join('kerusakan kr', 'kr.id_kerusakan = p.id_kerusakan');
 		$this->db->join('karyawan k', 'k.id_karyawan = p.id_karyawan');
 		return $this->db->get($this->nama_table)->result();


 		//$data['peminjaman'] = $this->db->order_by($this->id, $this->order);
 		//return $this->db->get($this->nama_table)->result();
 	}

 	function ambil_data_id($kode_service)
 	{
 		$this->db->where($this->kode_service,$kode_service);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($kode_service)
 	{
 		$this->db->where($this->kode_service, $kode_service);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($kode_service,$data)
 	{
 		$this->db->where($this->kode_service, $kode_service);
 		$this->db->update($this->nama_table,$data);
 	}




}

 ?>