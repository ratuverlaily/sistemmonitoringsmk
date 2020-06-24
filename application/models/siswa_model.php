<?php

class Siswa_model extends CI_Model{

	public function tampil_data(){
		$this->db->select('*');
	    $this->db->from('siswa');
	    $this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas', 'inner'); 
	    $this->db->join('jurusan', 'kelas.id_jurusan = jurusan.id_jurusan', 'inner'); 
	    return $this->db->get();		
	}

	public function input_data($data){
		$this->db->insert('siswa',$data);
	}

	public function edit_data($where, $table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ambil_kode_mahasiswa($kode){
		$result = $this->db->where('nim', $kode)->get('siswa');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}

	}
}