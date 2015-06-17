<?php 
/**
* 
*/
class Penyiaran extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){		
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['leveluser'] = $session_data[0]['level_user'];

		$data['order_iklan'] = $this->mView->ambil_sales_order();
		$data['order_jadwal'] = $this->mView->ambil_jadwal_order();
		$data['order_penyiaran'] = $this->mView->lihat_penyiaran();

		$this->load->view('penyiaran/penyiaran',$data);
	}
}
?>