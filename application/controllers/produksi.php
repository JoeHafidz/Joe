<?php 
/**
* 
*/
class Produksi extends CI_controller
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

		$data['order_produksi'] = $this->mview->lihat_jadwal_poduksi();
		$this->load->view('produksi/produksi',$data);
	}
	function order_detail(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['user_id'] = $session_data[0]['id_user'];
		$data['leveluser'] = $session_data[0]['level_user'];
		$data['followup'] = $this->mview->count_followup();

		$order = $this->uri->segment(3);
		$data['detail_order'] = $this->mview->detail_sales_order($order);
		$data['jadwal_tayang'] = $this->mview->lihat_jadwal($order);
		$data['file_produksi'] = $this->mview->lihat_file_produksi($order);

		$this->load->view('produksi/produksi_detail_sales_order',$data);
	}
	function upload_produksi(){
		$order = $this->input->post('so_id');
		$name_array = array();
				$count = count($_FILES['userfile']['size']);
				foreach($_FILES as $key=>$value)
				for($s=0; $s<=$count-1; $s++) {
					$_FILES['userfile']['name']		= $value['name'][$s];
					$_FILES['userfile']['type']    	= $value['type'][$s];
					$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
					$_FILES['userfile']['error']    = $value['error'][$s];
					$_FILES['userfile']['size']    	= $value['size'][$s];  
					$config['upload_path'] 			= './sounds/';
					$config['allowed_types'] 		= 'mp3|wav';
					$this->load->library('upload', $config);
					$this->upload->do_upload();
					$data = $this->upload->data();
					$name_array[] = $data['file_name'];
				}
			$names= implode(',', $name_array);
            $this->mcreate->save_file($names);
            $this->mupdate->produksi_update();
            redirect('produksi/order_detail/'.$order,'refresh');	
	}
	function konfrim_order_file(){
		$order = $this->input->post('idso');
		$this->mupdate->produksi_file_order();
		$this->mupdate->produksi_note();
		redirect('marketing/order_detail/'.$order,'refresh');
	}
	function delete_file(){
		$order = $this->uri->segment(3);
		$explode_url = explode("upload", $order);
		$this->mdelete->delete_file($explode_url[0]);
		$this->mdelete->delete_file_database($explode_url[0]);
		$this->mupdate->produksi_delete_file($explode_url[1]);
		redirect('produksi/order_detail/'.$explode_url[1],'refresh');
	}
}
?>
