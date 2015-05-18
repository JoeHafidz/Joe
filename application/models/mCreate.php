<?php 
/**
* 
*/
class mCreate extends CI_Model
{
	function add_post(){
		$datenow = date('Y-m-d');
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => $datenow,
			'idcategory' => $this->input->post('category'),
			'iduser' => $this->input->post('user_id')
			);
		$this->db->insert('ma_post',$data);
	}	
	function add_category(){
		$data = array(
			'category_name' => $this->input->post('category_name')
			);
		$this->db->insert('ma_category',$data);
	}
}
?>