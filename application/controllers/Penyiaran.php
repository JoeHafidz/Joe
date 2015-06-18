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
		$data['user_id'] = $session_data[0]['id_user'];
		$data['leveluser'] = $session_data[0]['level_user'];
		$data['followup'] = $this->mView->count_followup();

		$data['order_iklan'] = $this->mView->ambil_sales_order();
		$data['order_jadwal'] = $this->mView->ambil_jadwal_order();
		$data['order_penyiaran'] = $this->mView->lihat_penyiaran();		

		$this->load->view('penyiaran/penyiaran',$data);
	}
	function jadwal_siar(){
		$this->mCreate->tambah_penyiaran();
		redirect('penyiaran','refresh');
	}
}
?>