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
		$data['followup'] = $this->mview->count_followup();

		$data['show_user_data'] = $this->mview->show_user_data();
		$this->load->view('user/user',$data);
	}
	function register_new(){
		$this->mcreate->register_new();
		redirect('user','refresh');
	}

	function delete(){
		$idpost = $this->uri->segment(3);
		$this->mdelete->delete_user($idpost);
		redirect('user','refresh');
	}


}
?>