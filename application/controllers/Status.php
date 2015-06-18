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
		$data['followup'] = $this->mView->count_followup();

		$data['show_status'] = $this->mView->show_status_data();
		$this->load->view('status/status',$data);
	}
	function edit(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['leveluser'] = $session_data[0]['level_user'];
		$data['followup'] = $this->mView->count_followup();

		$idstatus = $this->uri->segment(3);
		$data['edit_status'] = $this->mView->status_edit($idstatus);
		$this->load->view('status/status_edit',$data);	
	}
	function edit_run(){
		$this->mUpdate->edit_status();
		redirect('status','refresh');
	}
}
?>