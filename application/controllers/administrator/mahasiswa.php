<?php
class Mahasiswa extends CI_Controller{

	public function index(){
		$data['mahasiswa'] = $this->mahasiswa_model->tampil_data('mahasiswa')->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/Mahasiswa',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_mahasiswa(){
		$data['mahasiswa'] = $this->mahasiswa_model->tampil_data('mahasiswa')->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/matakuliah_form',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function _rules(){
		$this->form_validation->set_rules('nim','nim','required', ['required' => 'Nim Wajib Diisi']);
		$this->form_validation->set_rules('nama_lengkap','nama lengkap','required', ['required' => 'Nama Lengkap Wajib Diisi']);
		$this->form_validation->set_rules('alamat','alamat','required', ['required' => 'Alamat Wajib Diisi']);
		$this->form_validation->set_rules('email','email','required', ['required' => 'Email Wajib Diisi']);
		$this->form_validation->set_rules('telepon','telepon','required', ['required' => 'Telpon Wajib Diisi']);
		$this->form_validation->set_rules('tempat_lahir','tempat lahir','required', ['required' => 'Tempat Lahir Wajib Diisi']);
		$this->form_validation->set_rules('tanggal_lahir','tanggal lahir','required', ['required' => 'Tanggal Lahir Wajib Diisi']);
		$this->form_validation->set_rules('jenis_kelamin','jenis kelamin','required', ['required' => 'Jenis Kelamin Wajib Diisi']);
		$this->form_validation->set_rules('nama_prodi','nama prodi','required', ['required' => 'Nama Prodi Wajib Diisi']);
		$this->form_validation->set_rules('photo','photo','required', ['required' => 'Photo Wajib Diisi']);
	}

	public function detail($kode){
		$data['detail'] = $this->mahasiswa_model->ambil_kode_mahasiswa($kode);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/mahasiswa_detail',$data);
		$this->load->view('templates_administrator/footer');

	}

	public function input(){
		$tmp = $this->mahasiswa_model->tampil_data('prodi')->result();

		$data = array(
			'nim' => set_value('nim'),
			'nama_lengkap' => set_value('nama_lengkap'),
			'alamat' => set_value('alamat'),
			'email' => set_value('email'),
			'telepon' => set_value('telepon'),
			'tempat_lahir' => set_value('tempat_lahir'),
			'tanggal_lahir' => set_value('tanggal_lahir'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'prodi' => $tmp,
			'photo' => set_value('photo')
		);

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/mahasiswa_form',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function insert_data(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			echo "hallloooooo";
			die;
			
			$nim = $this->input->post('nim',TRUE);
			$nama_lengkap = $this->input->post('nama_lengkap',TRUE);
			$alamat = $this->input->post('alamat',TRUE);
			$email = $this->input->post('email',TRUE);
			$telepon = $this->input->post('telepon',TRUE);
			$tempat_lahir = $this->input->post('tempat_lahir',TRUE);
			$tanggal_lahir = $this->input->post('tanggal_lahir',TRUE);
			$jenis_kelamin = $this->input->post('jenis_kelamin',TRUE);
			$prodi = $this->input->post('prodi',TRUE);
			$photo = $_FILES['photo'];
				if($photo = ''){

				}else{
					$config['upload_path'] = './assets/img/upload';
					$config['allowed_type'] = 'jpg|png|gif|tiff';

					$this->load->library('upload',$config);
					if($this->upload->do_upload('photo')){
						echo "gagal upload";
						die;
					}else{
						$photo = $this->upload->data('file_name');
					}
				}

				$data = array(
					'nim' => $nim,
					'nama_lengkap' => $nama_lengkap,
					'alamat' => $alamat,
					'email' => $email,
					'telepon' => $telepon,
					'tempat_lahir' => $tempat_lahir,
					'tanggal_lahir' => $tanggal_lahir,
					'jenis_kelamin' => $jenis_kelamin,
					'prodi' => $prodi,
					'photo' => $photo
				);
				
			
			$this->mahasiswa_model->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Mahasiswa Berhasil Ditambahkan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/matakuliah');
		}
	}

	public function update($id){
		$where = array('kode_matakuliah'=>$id);
		$data['matakuliah'] = $this->db->query("select * from matakuliah mk, prodi prd where mk.nama_prodi=prd.nama_prodi and mk.kode_matakuliah='$id'")->result();

		$data['prodi'] = $this->matakuliah_model->tampil_data('prodi')->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administator/matakuliah_update',$data);
		$this->load->view('templates_administrator/footer');

	}

	public function update_aksi(){
		$kode_matakuliah = $this->input->post('kode_matakuliah');
		$nama_matakuliah = $this->input->post('nama_matakuliah');
		$sks = $this->input->post('sks');
		$semester = $this->input->post('semester');
		$nama_prodi = $this->input->post('nama_prodi');

		$data = array(
			'nama_matakuliah' => $nama_matakuliah,
			'sks' => $sks,
			'semester' => $semester,
			'nama_prodi' => $nama_prodi,
		);

		$where = array(
			'kode_matakuliah' => $kode_matakuliah
		);
		
		$this->matakuliah_model->update_data($where,$data,'matakuliah');

		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Matakuliah Berhasil Diupdate<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/matakuliah');
		redirect('administrator/matakuliah');

	}

	public function delete($id){
		$where = array('kode_matakuliah' => $id);
		$this->matakuliah_model->hapus_data($where,'matakuliah');

		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Matakuliah Berhasil Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/matakuliah');
		redirect('administrator/matakuliah');
	}
}