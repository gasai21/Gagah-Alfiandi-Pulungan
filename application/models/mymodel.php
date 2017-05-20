<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	//untuk login
	public function loginok($username,$password)
	{
		$check = $this->db->query("select * from admin where username='$username' AND password=md5('$password')");
		if($check->num_rows()>0){
			return 1;
		}else{
			return 0;
		}
	}

	//untuk login user
	public function loginUsr($username,$password)
	{
		$check = $this->db->query("select * from user where usrUser='$username' AND passUser=md5('$password')");
		if($check->num_rows()>0){
			return 1;
		}else{
			return 0;
		}
	}

	//untuk Berita
	public function MTNews($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function tampilBerita($where=""){
		$res =$this->db->query('select * from news'.$where);
		return $res->result_array(); 
	}

	public function hapusBerita($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}

	public function updateberita($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}

	//untuk admin
	public function MTAdmin($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function tampilAdmin($where=""){
		$res =$this->db->query('select * from admin'.$where);
		return $res->result_array(); 
	}

	public function hapusAdmin($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}

	public function updateAdmin($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}

	//untuk badan berita
	public function GambarAtas(){
		$res = $this->db->query('select * from news ORDER BY idNews DESC LIMIT 4');
		return $res->result_array();
	}

	public function tekno(){
		$res = $this->db->query("select * from news where typeNews='Technology'");
		return $res->result_array();
	}

	public function spor(){
		$res = $this->db->query("select * from news where typeNews='Sports'");
		return $res->result_array();
	}

	public function tainment(){
		$res = $this->db->query("select * from news where typeNews='Entertainment'");
		return $res->result_array();
	}

	public function nasi(){
		$res = $this->db->query("select * from news where typeNews='National'");
		return $res->result_array();
	}

	//untuk search data
	public function caridata($cari)
	{
		$res = $this->db->query("select * from news where judulNews like '%$cari%' ");
		return $res->result();
	}

	//untuk menyimpan komen
	public function saveKomen($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	//menampilkan komen
	public function tampilkomen($where=""){
		$res =$this->db->query('select * from comen'.$where);
		return $res->result_array(); 
	}

}
