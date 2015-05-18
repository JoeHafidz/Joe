<?php 
/**
* 
*/
class mUpdate extends CI_Model
{
	function edit_post(){
		$datenow = date('Y-m-d');
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => $datenow,
			'idcategory' => $this->input->post('category'),
			'iduser' => $this->input->post('user_id')
			);
		$this->db->where('post_id', $this->input->post('post_id'));
		$this->db->update('ma_post', $data);
	}
}
?>