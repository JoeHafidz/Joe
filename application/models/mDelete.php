<?php 
/**
* 
*/
class mDelete extends CI_Model
{
	//marketing
	function delete_sales_order($id){
		$query = "DELETE FROM tb_salesorder WHERE idso = ?";
		$parameter = array($id);
		return $result = $this->db->query($query,$parameter);
	}
	//lain-lain
	function delete_user($id){
		$query = "DELETE FROM tb_user WHERE id_user = ?";
		$parameter = array($id);
		return $result = $this->db->query($query,$parameter);	
	}
	//keuangan
	function delete_jadwal($id){
		$query = "DELETE FROM tb_jadwal_tayang WHERE id_jadwal = ?";
		$parameter = array($id);
		return $result = $this->db->query($query,$parameter);	
	}
	
}
?>