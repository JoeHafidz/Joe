<?php 
/**
* 
*/
class mView extends CI_Model
{
	function check_login($username, $password){
		$query = "SELECT * FROM ma_user WHERE username = ? AND password = ?";
		$parameter = array($username,$password);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
	
}
?>