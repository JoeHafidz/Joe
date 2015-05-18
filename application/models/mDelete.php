<?php 
/**
* 
*/
class mDelete extends CI_Model
{
	function delete_post($id){
		$query = "DELETE FROM ma_post WHERE post_id = ?";
		$parameter = array($id);
		return $result = $this->db->query($query,$parameter);
	}
	function delete_category($id){
		$query = "DELETE FROM ma_category WHERE category_id = ?";
		$parameter = array($id);
		return $result = $this->db->query($query,$parameter);
	}
}
?>