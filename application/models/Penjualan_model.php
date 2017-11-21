<?php 
/**
* 
*/
class Penjualan_model extends CI_Model
{
	public $nama_table 	='penjualan';
	public $kode_jual	='kode_jual';
	public $order 		='ASC';

	function __construct()
	{
		parent::__construct();
	}

	function Select_Penjualan()
 	{
 		$this->db->distinct();
 		$this->db->select('p.kode_jual, p.jumlah_barang, p.total, b.kode_barang, b.nama_barang, b.harga_jual, k.nama_lengkap, p.tanggal');
 		$this->db->from('penjualan p');
 		$this->db->join('barang b', 'b.kode_barang = p.kode_barang');
 		$this->db->join('karyawan k', 'k.id_karyawan = p.id_karyawan');
 		return $this->db->get($this->nama_table)->result();


 		//$data['peminjaman'] = $this->db->order_by($this->id, $this->order);
 		//return $this->db->get($this->nama_table)->result();
 	}

function ambil_data_id($kode_jual)
 	{
 		$this->db->where($this->kode_jual,$kode_jual);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($kode_jual)
 	{
 		$this->db->where($this->kode_jual, $kode_jual);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($kode_jual,$data)
 	{
 		$this->db->where($this->kode_jual, $kode_jual);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>