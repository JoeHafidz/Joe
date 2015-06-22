<?php 
/**
* 
*/
class Status extends CI_controller
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

		$data['show_status'] = $this->mview->show_status_data();
		$this->load->view('status/status',$data);
	}
	function edit(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['leveluser'] = $session_data[0]['level_user'];
		$data['followup'] = $this->mview->count_followup();

		$idstatus = $this->uri->segment(3);
		$data['edit_status'] = $this->mview->status_edit($idstatus);
		$this->load->view('status/status_edit',$data);	
	}
	function edit_run(){
		$this->mupdate->edit_status();
		redirect('status','refresh');
	}
}
?>