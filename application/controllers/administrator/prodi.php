<?php
class Prodi extends CI_Controller{
	public function index(){
		$data['prodi'] = $this->prodi_model->tampil_data('prodi')->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/prodi',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_prodi(){
		$data['jurusan'] = $this->prodi_model->tampil_data('jurusan')->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/prodi_form',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function _rules(){
		$this->form_validation->set_rules('kode_prodi','kode prodi','required', ['required' => 'Kode prodi Wajib Diisi']);
		$this->form_validation->set_rules('nama_prodi','nama prodi','required', ['required' => 'Nama Prodi Wajib Diisi']);
		$this->form_validation->set_rules('nama_jurusan','nama jurusan','required', ['required' => 'Nama Jurusan Wajib Diisi']);
	}

	public function input(){
		$tmp = $this->prodi_model->tampil_data('jurusan')->result();

		$data = array(
			'id_prodi' => set_value('id_prodi'),
			'kode_prodi' => set_value('kode_prodi'),
			'nama_prodi' => set_value('nama_prodi'),
			'jurusan' => $tmp,
		);

		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/prodi_form',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function insert_data(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$data = array(
				'kode_prodi' => $this->input->post('kode_prodi',TRUE),
				'nama_prodi' => $this->input->post('nama_prodi',TRUE),
				'nama_jurusan' => $this->input->post('nama_jurusan',TRUE)
			);

			$this->prodi_model->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Program Studi Berhasil Ditambahkan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/prodi');
		}
	}

	public function update($id){
		$where = array('id_prodi'=>$id);
		$data['prodi'] = $this->db->query("select * from prodi prd, jurusan jrs where prd.nama_jurusan=jrs.nama_jurusan and prd.id_prodi='$id'")->result();

		$data['jurusan'] = $this->prodi_model->tampil_data('jurusan')->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/prodi_update',$data);
		$this->load->view('templates_administrator/footer');

	}

	public function update_aksi(){
		$id = $this->input->post('id_prodi');
		$kode_prodi = $this->input->post('kode_prodi');
		$nama_prodi = $this->input->post('nama_prodi');
		$nama_jurusan = $this->input->post('nama_jurusan');

		$data = array(
			'kode_prodi' => $kode_prodi,
			'nama_prodi' => $nama_prodi,
			'nama_jurusan' => $nama_jurusan
		);

		$where = array(
			'id_prodi' => $id
		);
		
		$this->prodi_model->update_data($where,$data,'prodi');

		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Program Studi Berhasil Diupdate<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/prodi');
		redirect('administrator/prodi');

	}

	public function delete($id){
		$where = array('id_prodi' => $id);
		$this->prodi_model->hapus_data($where,'prodi');

		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Program Studi Berhasil Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/prodi');
		redirect('administrator/prodi');
	}
}