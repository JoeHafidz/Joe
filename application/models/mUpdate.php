<?php 
/**
* 
*/
class mUpdate extends CI_Model
{
	function edit_sales_order(){
		$data = array(
			'nama_order' 		=> $this->input->post('nama_order'),
			'crp' 				=> $this->input->post('crp'),
			'jenis_order' 		=> $this->input->post('jenis_order'),
			'materi_siar' 		=> $this->input->post('materi_siar'),
			'status_id' 		=> '1',
			'user_id' 			=> $this->input->post('user_id')
			);
		$this->db->where('idso', $this->input->post('idso'));
		$this->db->update('tb_salesorder', $data);
	}

	function edit_status(){
		$data = array(
			'deskripsi'				=> $this->input->post('deskripsi')
			);
		$this->db->where('id_status_so', $this->input->post('id_status_so'));
		$this->db->update('tb_status_so', $data);	
	}
	function perbarui_konfirmasi(){
		$data = array(
			'status'				=> $this->input->post('status'),
			'komen'				=> $this->input->post('komen')
			);
		$this->db->where('id_approve', $this->input->post('id_approve'));
		$this->db->update('tb_approve', $data);		
	}
	function change_approve(){
		$data = array(
			'status_id'				=> $this->input->post('status'),
			'approve'				=> $this->input->post('status'),
			'status_produksi'		=> $this->input->post('status_produksi')
			);
		$this->db->where('idso', $this->input->post('so_id'));
		$this->db->update('tb_salesorder', $data);
	}
	function change_approve_konfrim(){
		$data = array(
			'status_id'				=> $this->input->post('status'),
			'approve'				=> $this->input->post('status'),
			'crp'					=> $this->input->post('crp'),
			'status_produksi'		=> $this->input->post('status_produksi')
			);
		$this->db->where('idso', $this->input->post('so_id'));
		$this->db->update('tb_salesorder', $data);
	}
	function produksi_update(){
		$data = array(
			'status_id'				=> $this->input->post('status'),
			'status_produksi'		=> $this->input->post('produksi_update')
			);
		$this->db->where('idso', $this->input->post('so_id'));
		$this->db->update('tb_salesorder', $data);
	}
	function produksi_file_order(){
		$select = $this->input->post('file_konfirm');
		if ($select == 3) {
			$status_produksi = 3;
			$status_id = 6;
			$status_penyiaran = 1;
			$approve = 5;
		} else if($select == 4){
			$status_produksi = 4;
			$status_id = 7;
			$approve = 6;
			$status_penyiaran = 0;
		}

		$data = array(
			'approve'				=> $approve,
			'status_id'				=> $status_id,
			'status_penyiaran'		=> $status_penyiaran,
			'status_produksi'		=> $status_produksi
			);
		$this->db->where('idso', $this->input->post('idso'));
		$this->db->update('tb_salesorder', $data);
	}
	
	
	function approve_order_user($id){
		$data = array(
			'status_id'		=> '10'
			);
		$this->db->where('id_user_order', $id);
		$this->db->update('tb_user_order', $data);
	}
	
}
?>