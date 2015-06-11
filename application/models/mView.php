<?php 
/**
* 
*/
class mView extends CI_Model
{
	function check_login($username, $password){
		$query = "SELECT * FROM tb_user WHERE username = ? AND password = ?";
		$parameter = array($username,$password);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
    function check_new_order(){
    	$query =  "SELECT AUTO_INCREMENT as order_so FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'sql677717' AND TABLE_NAME = 'tb_salesorder'"; //table schema digati ke nama tabel lokal klo dbkin asline
		$result = $this->db->query($query);
		return $result->result_array();
    }
    function semua_sales_order(){
        $query =  "SELECT *,tb_status_so.deskripsi AS status_order FROM tb_salesorder 
                    LEFT JOIN tb_status_so ON tb_salesorder.status_id = tb_status_so.id_status_so ORDER BY idso DESC";
        $result = $this->db->query($query);
        return $result->result_array();    
    }
    function detail_sales_order($id){
        $query = "SELECT * FROM tb_salesorder WHERE idso = ?";
        $parameter = array($id);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
}
?>