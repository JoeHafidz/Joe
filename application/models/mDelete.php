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
	// produksi
	function delete_file_database($id){
		$query = "DELETE FROM tb_upload_so WHERE id_upload_so = ?";
		$parameter = array($id);
		return $result = $this->db->query($query,$parameter);	
	}
	function delete_file($id){
		$query = "SELECT * FROM tb_upload_so WHERE id_upload_so = ?";
		$parameter = array($id);
		$result = $this->db->query($query,$parameter);
		$end = $result->result_array();
		$filelocation = './sounds/'.$end[0]['filename'];
		unlink($filelocation);
	}
	
}
?>