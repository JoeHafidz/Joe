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
		$data['user_id'] = $session_data[0]['id_user'];
		$data['leveluser'] = $session_data[0]['level_user'];
		
		$data['order_so'] = $this->mView->semua_sales_order();
		$this->load->view('marketing/marketing',$data);
	}
	function tambah_order(){		
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['user_id'] = $session_data[0]['id_user'];
		$data['leveluser'] = $session_data[0]['level_user'];

		$no_so = $this->mView->check_new_order();
		$data['nomer_so'] = $no_so[0]['order_so'];
		$this->load->view('marketing/marketing_tambah_order',$data);
	}
	function tambah_baru(){		
		$this->mCreate->add_sales_order();
		redirect('marketing','refresh');
	}
	function order_detail(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['user_id'] = $session_data[0]['id_user'];
		$data['leveluser'] = $session_data[0]['level_user'];

		$order = $this->uri->segment(3);
		$data['detail_order'] = $this->mView->detail_sales_order($order);
		$this->load->view('marketing/marketing_detail_sales_order',$data);

	}
	function edit_order(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['user_id'] = $session_data[0]['id_user'];
		$data['leveluser'] = $session_data[0]['level_user'];
		
		$order = $this->uri->segment(3);
		$data['detail_order_edit'] = $this->mView->detail_sales_order($order);
		$this->load->view('marketing/marketing_edit_order',$data);

	}
	function edit_order_run(){
		$order = $this->input->post('idso');
		$this->mUpdate->edit_sales_order();
		redirect('marketing/order_detail/'.$order,'refresh');
	}
	function delete_sales_order(){
		$order = $this->uri->segment(3);
		$this->mDelete->delete_sales_order($order);
		redirect('marketing','refresh');
	}
	
}

// $name_array = array();
// 				$count = count($_FILES['userfile']['size']);
// 				foreach($_FILES as $key=>$value)
// 				for($s=0; $s<=$count-1; $s++) {
// 					$_FILES['userfile']['name']		= $value['name'][$s];
// 					$_FILES['userfile']['type']    	= $value['type'][$s];
// 					$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
// 					$_FILES['userfile']['error']    = $value['error'][$s];
// 					$_FILES['userfile']['size']    	= $value['size'][$s];  
// 					$config['upload_path'] 			= '../images/mainslide/';
// 					$config['allowed_types'] 		= 'jpg|jpeg|png';
// 					$this->load->library('upload', $config);
// 					$this->upload->do_upload();
// 					$data = $this->upload->data();
// 					$name_array[] = $data['file_name'];
// 				}
// 				$names= implode(',', $name_array);
//             $this->main_slider_model->save_file($names);
//             redirect('other/main_slider/','refresh');	
?>