<?php 
/**
* 
*/
class Keuangan extends CI_controller
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
		$data['followup'] = $this->mview->count_followup();
		
		$data['order_so'] = $this->mview->semua_sales_order();
		$this->load->view('keuangan/keuangan',$data);
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
		$data['approve_status'] = $this->mview->approve_status($order);
		$data['jadwal_tayang'] = $this->mview->lihat_jadwal($order);
		$this->load->view('keuangan/keuangan_detail_sales_order',$data);
	}
	function konfirmasi(){
		$order = $this->input->post('so_id');
		$this->mcreate->konfrimasi_order();
		$this->mupdate->change_approve();
		redirect('keuangan/order_detail/'.$order,'refresh');
	}
	function perbarui_konfirmasi(){
		$order = $this->input->post('so_id');
		$this->mupdate->perbarui_konfirmasi();
		$this->mupdate->change_approve_konfrim();
		redirect('keuangan/order_detail/'.$order,'refresh');
	}
	function set_jadwal(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['user_id'] = $session_data[0]['id_user'];
		$data['leveluser'] = $session_data[0]['level_user'];
		$data['followup'] = $this->mview->count_followup();

		$order = $this->uri->segment(3);
		$data['detail_order'] = $this->mview->detail_sales_order($order);
		$data['jadwal_tayang'] = $this->mview->lihat_jadwal($order);
		$this->load->view('keuangan/keuangan_set_jadwal',$data);
		
	}
	function simpan_jadwal(){
		$order = $this->input->post('so_id');
		$this->mcreate->simpan_jadwal_tayang();
		$this->mupdate->change_approve();
		redirect('keuangan/set_jadwal/'.$order,'refresh');
	}
	function delete_jadwal(){
		$order = $this->uri->segment(3);
		$explode_url = explode("jadwal", $order);
		$this->mdelete->delete_jadwal($explode_url[0]);
		redirect('keuangan/set_jadwal/'.$explode_url[1],'refresh');
	}
	function laporan_siar(){
		$order = $this->uri->segment(3);
		$data['order_penyiaran'] = $this->mview->lihat_penyiaran_status($order);
		$this->load->view('keuangan/keuangan_laporan_siar',$data);
	}
	function siaran_selesai(){
		$order = $this->uri->segment(3);
		$this->mupdate->siaran_selesai($order);
		redirect('keuangan/order_detail/'.$order,'refresh');
	}
}
?>
