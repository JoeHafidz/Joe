<?php 
/**
* 
*/
class Marketing extends CI_controller
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
		$this->load->view('marketing',$data);
	}
	function tambah_order(){		
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['leveluser'] = $session_data[0]['level_user'];
		$this->load->view('marketing_tambah_order',$data);
	}
	function tambah_baru(){		
	//	$this->mCreate->add_post();
		redirect('marketing','refresh');
	}
	
}
?>