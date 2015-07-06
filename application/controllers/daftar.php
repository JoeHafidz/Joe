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
		$nama = $this->input->post('username');
		$cek = $this->mview->check_new_user($nama);
		if ($cek[0]['ADA'] > 0) {
			session_start();
			session_destroy();
			$data['error'] = 'Anda Sudah Pernah daftar';
			$this->load->view('daftar',$data);
		} else {
			$this->mcreate->register_new();
			session_start();
			session_destroy();
			$data['error'] = 'Silahkan Login';
			$this->load->view('login',$data);
		}
	}
}
?>
