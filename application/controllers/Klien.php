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

		$user_id = $session_data[0]['id_user'];
		$data['klien_order'] = $this->mView->klien_order($user_id);
		$this->load->view('klien/klien',$data);
	}
	
}
?>