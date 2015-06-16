<?php 
/**
* 
*/
class Keuangan extends CI_controller
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
		
		$data['order_so'] = $this->mView->semua_sales_order();
		$this->load->view('keuangan/keuangan',$data);
	}
	function order_detail(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['user_id'] = $session_data[0]['id_user'];
		$data['leveluser'] = $session_data[0]['level_user'];

		$order = $this->uri->segment(3);
		$data['detail_order'] = $this->mView->detail_sales_order($order);
		$data['approve_status'] = $this->mView->approve_status($order);
		$data['jadwal_tayang'] = $this->mView->lihat_jadwal($order);
		$this->load->view('keuangan/keuangan_detail_sales_order',$data);
	}
	function konfirmasi(){
		$order = $this->input->post('so_id');
		$this->mCreate->konfrimasi_order();
		$this->mUpdate->change_approve();
		redirect('keuangan/order_detail/'.$order,'refresh');
	}

	function set_jadwal(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['user_id'] = $session_data[0]['id_user'];
		$data['leveluser'] = $session_data[0]['level_user'];

		$order = $this->uri->segment(3);
		$data['detail_order'] = $this->mView->detail_sales_order($order);
		$data['jadwal_tayang'] = $this->mView->lihat_jadwal($order);
		$this->load->view('keuangan/keuangan_set_jadwal',$data);
		
	}
	function simpan_jadwal(){
		$order = $this->input->post('so_id');
		$this->mCreate->simpan_jadwal_tayang();
		$this->mUpdate->change_approve();
		redirect('keuangan/set_jadwal/'.$order,'refresh');
	}
	function delete_jadwal(){
		$order = $this->uri->segment(3);
		$explode_url = explode("jadwal", $order);
		$this->mDelete->delete_jadwal($explode_url[0]);
		redirect('keuangan/set_jadwal/'.$explode_url[1],'refresh');
	}
	
}
?>