<?php 
/**
* 
*/
class Daftar extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){		
		session_start();
		session_destroy();
		$data['error'] = 'Please Register';
		$this->load->view('daftar',$data);
	}
	function register_new(){
		$this->mcreate->register_new();
		redirect('login','refresh');
	}
}
?>