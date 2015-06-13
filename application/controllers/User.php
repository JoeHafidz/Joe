<?php 
/**
* 
*/
class User extends CI_controller
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
		$this->load->view('main',$data);
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}
?>