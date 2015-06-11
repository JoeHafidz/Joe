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
	function change_approve(){
		$data = array(
			'status_id'				=> $this->input->post('status'),
			'approve'				=> $this->input->post('status')
			);
		$this->db->where('idso', $this->input->post('so_id'));
		$this->db->update('tb_salesorder', $data);
	}
}
?>