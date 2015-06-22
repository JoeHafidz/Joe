<?php 
/**
* 
*/
class mCreate extends CI_Model
{
	function register_new(){
		$data = array(
			'nama'				=> $this->input->post('nama'),
			'perusahaan' 		=> $this->input->post('perusahaan'),
			'alamat_perusahaan'	=> $this->input->post('alamat_perusahaan'),
			'telp'				=> $this->input->post('telp'),
			'username' 			=> $this->input->post('username'),
			'password' 			=> $this->input->post('password'),
			'level_user' 		=> $this->input->post('level_user')
			);
		$this->db->insert('tb_user',$data);
	}
	function add_sales_order(){
		$data = array(
			'noso'				=> $this->input->post('noso'),
			'tanggal_order' 	=> $this->input->post('tanggal_order'),
			'klien_id' 			=> $this->input->post('klien_id'),
			'nama_order' 		=> $this->input->post('nama_order'),
			'crp' 				=> $this->input->post('crp'),
			'jenis_order' 		=> $this->input->post('jenis_order'),
			'materi_siar' 		=> $this->input->post('materi_siar'),
			'status_id' 		=> '1',
			'user_id' 			=> $this->input->post('user_id')
			);
		$this->db->insert('tb_salesorder',$data);
	}	
	function konfrimasi_order()
	{
		$data = array(
			'status'				=> $this->input->post('status'),
			'komen' 				=> $this->input->post('komen'),
			'so_id' 				=> $this->input->post('so_id'),
			'user_id' 				=> $this->input->post('user_id')
			);
		$this->db->insert('tb_approve',$data);
	}
	function simpan_jadwal_tayang(){
		$waktu = $this->input->post('waktu');
		$waktu_tayang = implode(',', $waktu);
		$data = array(
			'tanggal_jadwal'		=> $this->input->post('tanggal_jadwal'),
			'waktu_jadwal' 			=> $waktu_tayang,
			'so_id' 				=> $this->input->post('so_id'),
			'user_id' 				=> $this->input->post('user_id')
			);
		$this->db->insert('tb_jadwal_tayang',$data);	
	}
	function save_file($name){
		$data = array(
			'so_id' 		=>$this->input->post('so_id'),
			'filename' 		=> $name,
			'user_id' 		=>$this->input->post('user_id')
			);
		$this->db->insert('tb_upload_so',$data);
	}
	function request_iklan(){
		$data = array(
			'user_id'				=> $this->input->post('user_id'),
			'note'					=> $this->input->post('note'),
			'tanggal_order' 		=> $this->input->post('tanggal_order'),
			'status_id' 			=> 9
			);
		$this->db->insert('tb_user_order',$data);
	}
	function tambah_penyiaran(){
		$idso = $this->input->post('so_id');
		$explode = explode('so_id', $idso);
		$data = array(
			'user_id'			=> $this->input->post('user_id'),
			'tanggal_tayang'	=> $this->input->post('tanggal_tayang'),
			'jam_tayang' 		=> $this->input->post('jam_tayang'),
			'so_id' 			=> $explode[1]
			);
		$this->db->insert('tb_tayang',$data);
	}
}
?>
