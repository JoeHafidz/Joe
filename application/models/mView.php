<?php 
/**
* 
*/
class mView extends CI_Model
{
    //Lain-lain
	function check_login($username, $password){
		$query = "SELECT * FROM tb_user WHERE username = ? AND password = ?";
		$parameter = array($username,$password);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
     function approve_status($id){
        $query = "SELECT * FROM tb_approve WHERE so_id = ?";
        $parameter = array($id);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
    function status_edit($id){
        $query = "SELECT * FROM tb_status_so WHERE id_status_so = ?";
        $parameter = array($id);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();   
    }
    function show_status_data(){
        $query = "SELECT * FROM tb_status_so";
        $result = $this->db->query($query);
        return $result->result_array();   
    }
    function show_user_data(){
        $query = "SELECT * FROM tb_user";
        $result = $this->db->query($query);
        return $result->result_array();   
    }

    //marketing
    function check_new_order(){
    	 $query =  "SELECT AUTO_INCREMENT as order_so FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'sql677717' AND TABLE_NAME = 'tb_salesorder'"; //table schema digati ke nama tabel lokal klo dbkin asline
        //$query =  "SELECT AUTO_INCREMENT as order_so FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'dbradio' AND TABLE_NAME = 'tb_salesorder'"; //table schema digati ke nama tabel lokal klo dbkin asline
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
        $query = "SELECT *,tb_status_so.deskripsi AS status_order FROM tb_salesorder 
                    LEFT JOIN tb_status_so ON tb_salesorder.status_id = tb_status_so.id_status_so WHERE idso = ?";
        $parameter = array($id);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
    function lihat_status_order($id){
        $query = "SELECT * FROM tb_approve WHERE so_id = ?";
        $parameter = array($id);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
    //keuangan
    function lihat_jadwal($id){
        $query = "SELECT * FROM tb_jadwal_tayang WHERE so_id = ?";
        $parameter = array($id);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();  
    }
}
?>