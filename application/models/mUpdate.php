<?php 
/**
* 
*/
class mUpdate extends CI_Model
{
	function edit_sales_order(){
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
		$this->db->where('idso', $this->input->post('idso'));
		$this->db->update('tb_salesorder', $data);
	}

	function edit_status(){
		$data = array(
			'deskripsi'				=> $this->input->post('deskripsi')
			);
		$this->db->where('id_status_so', $this->input->post('id_status_so'));
		$this->db->update('tb_status_so', $data);	
	}

	function change_approve(){
		$data = array(
			'status_id'				=> $this->input->post('status'),
			'approve'				=> $this->input->post('status'),
			'status_produksi'		=> $this->input->post('status_produksi')
			);
		$this->db->where('idso', $this->input->post('so_id'));
		$this->db->update('tb_salesorder', $data);
	}
	function produksi_update(){
		$data = array(
			'status_id'				=> $this->input->post('status'),
			'status_produksi'		=> $this->input->post('produksi_update')
			);
		$this->db->where('idso', $this->input->post('so_id'));
		$this->db->update('tb_salesorder', $data);
	}
	function produksi_accept_order($id){
		$data = array(
			'approve'				=> '5',
			'status_id'				=> '6',
			'status_produksi'		=> '3'
			);
		$this->db->where('idso', $id);
		$this->db->update('tb_salesorder', $data);
	}
	function produksi_decline_order($id){
		$data = array(
			'approve'				=> '6',
			'status_id'				=> '7',
			'status_produksi'			=> '4'
			);
		$this->db->where('idso', $id);
		$this->db->update('tb_salesorder', $data);
	}
	
}
?>