<?php 
/**
* 
*/
class mDelete extends CI_Model
{
	function delete_sales_order($id){
		$query = "DELETE FROM tb_salesorder WHERE idso = ?";
		$parameter = array($id);
		return $result = $this->db->query($query,$parameter);
	}
	
}
?>