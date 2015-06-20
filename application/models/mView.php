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
        $query =  "SELECT *,tb_status_so.deskripsi AS status_order, tb_user.nama as klien_id FROM tb_salesorder 
                    LEFT JOIN tb_status_so ON tb_salesorder.status_id = tb_status_so.id_status_so 
                    LEFT JOIN tb_user ON tb_salesorder.klien_id = tb_user.id_user 
                    ORDER BY idso DESC";
        $result = $this->db->query($query);
        return $result->result_array();    
    }
    function detail_sales_order($id){
        $query = "SELECT *,tb_status_so.deskripsi AS status_order, tb_user.nama as klien_id FROM tb_salesorder 
                    LEFT JOIN tb_status_so ON tb_salesorder.status_id = tb_status_so.id_status_so 
                    LEFT JOIN tb_user ON tb_salesorder.klien_id = tb_user.id_user
                    WHERE idso = ?";
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
    function list_klien(){
        $query = "SELECT * FROM tb_user WHERE level_user = 'klien'";
        $result = $this->db->query($query);
        return $result->result_array();   
    }
    function show_user_data_marketing(){
        $query = "SELECT * FROM tb_user WHERE level_user = 'klien'";
        $result = $this->db->query($query);
        return $result->result_array();
    }
    function count_followup(){
        $query = "SELECT count(*) AS count_followup FROM tb_user_order WHERE status_id = 9";
        $result = $this->db->query($query);
        return $result->result_array();
    }
    function show_user_order(){
        $query = "SELECT *,tb_status_so.deskripsi AS status_order, tb_user.nama as klien_id  FROM tb_user_order 
                    LEFT JOIN tb_status_so ON tb_user_order.status_id = tb_status_so.id_status_so
                    LEFT JOIN tb_user ON tb_user_order.user_id = tb_user.id_user
                    WHERE status_id = 9 OR status_id = 10";
        $result = $this->db->query($query);
        return $result->result_array();
    }
    function konfrimasi_order(){
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
     function lihat_penyiaran_status($id){
        $query = "SELECT *,tb_salesorder.nama_order AS so_id,tb_user.username AS user_id FROM tb_tayang 
                  LEFT JOIN tb_salesorder ON tb_salesorder.idso = tb_tayang.so_id
                  LEFT JOIN tb_user ON tb_tayang.user_id = tb_user.id_user WHERE idso = ?";
        $parameter = array($id);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();     
    }

    //Produksi
    function lihat_jadwal_poduksi(){
        $query = "SELECT *,tb_status_so.deskripsi AS status_order, tb_user.nama as klien_id FROM tb_salesorder 
                    LEFT JOIN tb_status_so ON tb_salesorder.status_id = tb_status_so.id_status_so
                    LEFT JOIN tb_user ON tb_salesorder.klien_id = tb_user.id_user
                    WHERE status_produksi > 0 ORDER BY idso DESC";
        $result = $this->db->query($query);
        return $result->result_array();     
    }
    function lihat_file_produksi($id){
        $query = "SELECT * FROM tb_upload_so WHERE so_id = ?";
        $parameter = array($id);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
    // Penyiaran
    function lihat_penyiaran(){
        $query = "SELECT *,tb_salesorder.nama_order AS so_id,tb_user.username AS user_id FROM tb_tayang 
                  LEFT JOIN tb_salesorder ON tb_salesorder.idso = tb_tayang.so_id
                  LEFT JOIN tb_user ON tb_tayang.user_id = tb_user.id_user ORDER BY id_tayang DESC";
        $result = $this->db->query($query);
        return $result->result_array();     
    }
    function ambil_sales_order(){
        $query = "SELECT *, tb_user.nama as klien_id FROM tb_salesorder 
                LEFT JOIN tb_user ON tb_salesorder.klien_id = tb_user.id_user
                LEFT JOIN tb_upload_so ON tb_salesorder.idso = tb_upload_so.so_id WHERE tb_salesorder.status_id > 3
                AND status_penyiaran = 1
                ORDER BY idso DESC";
        $result = $this->db->query($query);
        return $result->result_array();        
    }
    function ambil_jadwal_order(){
        $query = "SELECT * FROM tb_jadwal_tayang";
        $result = $this->db->query($query);
        return $result->result_array();           
    }
    // Klien
    function klien_order($id){
        $query = "SELECT *,tb_status_so.deskripsi AS status_order FROM tb_user_order 
                LEFT JOIN tb_status_so ON tb_user_order.status_id = tb_status_so.id_status_so
                WHERE user_id = ?";
        $parameter = array($id);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
    function lihat_order_klien($id){
        $query = "SELECT *,tb_status_so.deskripsi AS status_order, tb_user.nama as klien_id FROM tb_salesorder 
                    LEFT JOIN tb_status_so ON tb_salesorder.status_id = tb_status_so.id_status_so 
                    LEFT JOIN tb_user ON tb_salesorder.klien_id = tb_user.id_user
                    WHERE klien_id = ?";
        $parameter = array($id);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
}
?>