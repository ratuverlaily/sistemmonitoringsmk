<?php
class Kategori extends CI_Controller{

	public function index(){
		$data['kategori'] = $this->kategori_model->tampil_data()->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/kategori',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function kembali(){
		$data['jurusan'] = $this->jurusan_model->tampil_data()->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/jurusan',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function kirim($id){
		$data['jurusan'] = $this->jurusan_model->tampil_data()->result();
		$json_array = array();
		foreach ($data['jurusan'] as $jrs) {
			$json_array[] = $jrs;
		}
		echo "<b>Data Sudah Terkirim Di RabbitMQ Name Host: /tmdg/task_queue</b>";
		print_r(json_encode($json_array));
		die;
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/jurusan',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input(){
		$data = array(
			'id_jurusan' => set_value('id_jurusan'),
			'kode_jurusan' => set_value('kode_jurusan'),
			'nama_jurusan' => set_value('nama_jurusan'),
		);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/jurusan_form',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi(){
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$data = array(
				'kode_jurusan' => $this->input->post('kode_jurusan',TRUE),
				'nama_jurusan' => $this->input->post('nama_jurusan',TRUE)
			);

			$this->jurusan_model->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Jurusan Berhasil Ditambahkan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/jurusan');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('kode_jurusan','kode jurusan','required', ['required' => 'Kode Jurusan Wajib Diisi']);
		$this->form_validation->set_rules('nama_jurusan','nama jurusan','required', ['required' => 'Nama Jurusan Wajib Diisi']);
	}

	public function update($id){
		$where = array('id_jurusan'=>$id);
		$data['jurusan'] = $this->jurusan_model->edit_data($where,'jurusan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/jurusan_update',$data);
		$this->load->view('templates_administrator/footer');

	}

	public function update_aksi(){
		$id = $this->input->post('id_jurusan');
		$kode_jurusan = $this->input->post('kode_jurusan');
		$nama_jurusan = $this->input->post('nama_jurusan');

		$data = array(
			'kode_jurusan' => $kode_jurusan,
			'nama_jurusan' => $nama_jurusan
		);
		
		$where = array(
			'id_jurusan' => $id
		);
				
		$this->jurusan_model->update_data($where,$data,'jurusan');

		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Jurusan Berhasil Diupdate<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/jurusan');
		redirect('administrator/jurusan');

	}

	public function delete($id){
		$where = array('id_jurusan' => $id);
		$this->jurusan_model->hapus_data($where,'jurusan');

		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data jurusan Berhasil Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/jurusan');
		redirect('administrator/jurusan');
	}

}
