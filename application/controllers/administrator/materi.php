<?php
class Materi extends CI_Controller{

	public function index(){
		$data['kelas'] = $this->materi_model->tampil_data()->result();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/materi',$data);
		$this->load->view('templates_administrator/footer');
	}
	
	public function input(){
		$tmp = $this->jurusan_model->tampil_data('jurusan')->result();

		$data = array(
			'id_kelas' => set_value('id_kelas'),
			'nama_kelas' => set_value('nama_kelas'),
			'jurusan' => $tmp,
		);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/kelas_form',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi(){
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$data = array(
				'nama_kelas' => $this->input->post('nama_kelas',TRUE),
				'id_jurusan' => $this->input->post('nama_jurusan',TRUE)
			);

			$this->kelas_model->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Kelas Berhasil Ditambahkan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/kelas');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('nama_kelas','nama kelas','required', ['required' => 'Nama Kelas Wajib Diisi']);
		$this->form_validation->set_rules('nama_jurusan','nama jurusan','required', ['required' => 'Nama Jurusan Wajib Diisi']);
	}

	public function update($id){
		$where = array('id_kelas'=>$id);
		$data['kelas'] = $this->kelas_model->edit_data($where,'kelas')->result();
		$data['jurusan'] = $this->jurusan_model->tampil_data('jurusan')->result();

		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/kelas_update',$data);
		$this->load->view('templates_administrator/footer');

	}

	public function update_aksi(){
		$id = $this->input->post('id_kelas');
		$nama_kelas = $this->input->post('nama_kelas');
		$id_jurusan = $this->input->post('nama_jurusan');

		$data = array(
			'nama_kelas' => $nama_kelas,
			'id_jurusan' => $id_jurusan
		);
		
		$where = array(
			'id_kelas' => $id
		);
				
		$this->jurusan_model->update_data($where,$data,'kelas');

		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Kelas Berhasil Diupdate<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/kelas');
		redirect('administrator/kelas');

	}

	public function delete($id){
		$where = array('id_kelas' => $id);
		$this->kelas_model->hapus_data($where,'kelas');

		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Kelas Berhasil Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/kelas');
		redirect('administrator/kelas');
	}

}
