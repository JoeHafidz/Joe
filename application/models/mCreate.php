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
			'pemberi_order' 	=> $this->input->post('pemberi_order'),
			'perusahaan' 		=> $this->input->post('perusahaan'),
			'alamat_perusahaan'	=> $this->input->post('alamat_perusahaan'),
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
}
?>