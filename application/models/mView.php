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
    function show_all_sales_order(){
        $query =  "SELECT * FROM tb_salesorder";
        $result = $this->db->query($query);
        return $result->result_array();    
    }
}
?>