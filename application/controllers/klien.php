<?php 
/**
* 
*/
class Klien extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){		
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['user_id'] = $session_data[0]['id_user'];
		$data['leveluser'] = $session_data[0]['level_user'];
		$data['followup'] = $this->mview->count_followup();

		$user_id = $session_data[0]['id_user'];
		$data['klien_order'] = $this->mview->klien_order($user_id);
		$data['order_so'] = $this->mview->lihat_order_klien($user_id);
		$this->load->view('klien/klien',$data);
	}
	function request_new(){
		$this->mcreate->request_iklan();
		redirect('klien','refresh');
	}
	function order_detail(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['user_id'] = $session_data[0]['id_user'];
		$data['leveluser'] = $session_data[0]['level_user'];
		$data['followup'] = $this->mview->count_followup();

		$order = $this->uri->segment(3);
		$data['detail_order'] = $this->mview->detail_sales_order($order);
		$data['jadwal_tayang'] = $this->mview->lihat_jadwal($order);
		$data['detail_status'] = $this->mview->lihat_status_order($order);
		$data['file_produksi'] = $this->mview->lihat_file_produksi($order);
		
		$this->load->view('klien/klien_detail_sales_order',$data);

	}
	function delete(){
		$order = $this->uri->segment(3);
		$this->mdelete->delete_iklan($order);
		redirect('klien','refresh');
	}
}
?>
