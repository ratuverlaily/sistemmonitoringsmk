<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//echo base_url();
		//echo "saya contoller web"; 
		/*$data = array (
					'nama' => 'Ratu verlaili E',
					'kuliah' => 's2 itb',
					'ipk' => '3,5'
				);

		$this->load->view('welcome_message', $data);

		$data = $this->db->query('select * from mahasiswa');
		foreach ($data->result_array() as $d) {
			echo "Nim 		:".$d['nim']."<br/>";
			echo "Nama 		:".$d['nama']."<br/>";
			echo "Alamat 	:".$d['alamat']."<hr/>";
		}*/

		$data = $this->mymodel->GetMahasiswa();
		/*foreach ($data as $d) {
			echo "Nim 		:".$d['nim']."<br/>";
			echo "Nama 		:".$d['nama']."<br/>";
			echo "Alamat 	:".$d['alamat']."<hr/>";
		}*/

		$this->load->view('tabel', array('data' => $data));
	}

	public function insert(){
		$res = $this->mymodel->InsertData('mahasiswa', array(
			"nim" 		=> "23219001",
			"nama" 		=> "tita apriliawati",
			"alamat" 	=> "jl dago atas"
		));

		if($res >= 1){
			echo "<h1>insert data sukses !!!</h1>";
		}else{
			echo "insert data gagal";
		}
	}

	public function update(){
		$res = $this->mymodel->UpdateData('mahasiswa', array("alamat" => "jl perdagoan"),array("nim" => "23219001"));
		if($res >= 1){
			echo "<h1>Update data sukses !!!</h1>";
		}else{
			echo "Update data gagal";
		}
	}

	public function delete(){
		$res = $this->mymodel->DeleteData('mahasiswa',array("nim" => "23219001"));
		if($res >= 1){
			echo "<h1>Delete data sukses !!!</h1>";
		}else{
			echo "Delete data gagal";
		}
	}

	public function cetak($nama1, $nama2)
	{
		echo $nama1."<br/>".$nama2;
	}
}
