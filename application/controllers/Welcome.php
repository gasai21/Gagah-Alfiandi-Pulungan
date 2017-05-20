<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function __construct(){
		parent:: __construct();

		$this->load->model('mymodel');
	}

	public function index()
	{
		$res = $this->mymodel->GambarAtas();
		$tec = $this->mymodel->tekno();
		$spr = $this->mymodel->spor();
		$ent = $this->mymodel->tainment();
		$nas = $this->mymodel->nasi();
		$this->load->view('home',array('data' => $res,
						  			   'dataa' => $tec,
						  			   'date' => $spr,
						  			   'dati' => $ent,
						  			   'datu' => $nas));
	}

	public function dataSQL(){
		$res= $this->mymodel->tampilBerita();
		$this->load->view('sqlAngular',array('data' => $res));
	}

	//untuk melakukan CRUD News
	public function insertNews(){

		$config['upload_path']          = 'assets/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 5024;
		$config['max_width']            = 1921;
		$config['max_height']           = 1200;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors(),'isi'=>0);
			$this->load->view('administrator', $error);
		}else{

		$gbr = $this->upload->data();
		$NmAdmin = $this->session->userdata('nama');
		$today = date("j F Y");
		$judul= $_POST['judul'];
		$isi = $_POST['isii'];
		$tipe = $_POST['tipe'];

		$data =array('judulNews' => $judul ,
					 'isiNews' => $isi,
					 'typeNews' => $tipe,
					 'gambarNews' => $gbr['file_name'],
					 'tanggalNews' => $today,
					 'admin' => $NmAdmin);

		$res = $this->mymodel->MTNews('news', $data);

		if($res >= 1){
			$alert['isi']=1;
			$this->load->view('administrator',$alert);
			}
		} 
	}

	public function deleteNews($idNews){
		$id = array('idNews' => $idNews );

		$res = $this->mymodel->hapusBerita('news',$id);

		if ($res >= 1) {?>
			<body onload='swal({title: "SUCCESS!",
                        text: "Data Has Been deleted",
                        timer: 3000,
                        type: "success",
                        showConfirmButton: false });'> <?php
			$this->load->view('administrator',array('isi'=>2));
		}
	}

	public function updateNews($idNews){
		$res = $this->mymodel->tampilBerita(" where idNews = '$idNews'");
		$data = array('id' => $res[0]['idNews'],
					'judul' => $res[0]['judulNews'],
					'isi' => $res[0]['isiNews'],
					'tipe' => $res[0]['typeNews'],
					'gambar' => $res[0]['gambarNews'], );
		$this->load->view('Update_EditNews',$data);
	}

	public function do_updateNews(){
		$config['upload_path']          = 'assets/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 5024;
		$config['max_width']            = 1921;
		$config['max_height']           = 1200;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors(),'isi'=>0);?>
			<body onload='swal({title: "FAILED!",
                        text: "the Picture does not match the format",
                        timer: 3000,
                        type: "error",
                        showConfirmButton: false });'>
			<?php $this->load->view('administrator', $error);
		}else{

		$gbr = $this->upload->data();
		$idNews = $_POST['idN'];
		$judul= $_POST['judul'];
		$isi = $_POST['isii'];
		$tipe = $_POST['tipe'];

		$data =array('judulNews' => $judul ,
					 'isiNews' => $isi,
					 'typeNews' => $tipe,
					 'gambarNews' => $gbr['file_name']);
		
		$id = array('idNews' => $idNews , );

		$res = $this->mymodel->updateberita('news',$data,$id);

		if($res >= 1){?>
			<body onload='swal({title: "SUCCESS!",
                        text: "Data Has Been Update",
                        timer: 3000,
                        type: "success",
                        showConfirmButton: false });'> <?php
			$this->load->view('administrator',array('isi'=>2));
		}

		}
	}	

	//untuk melakukan CRUD admin
	public function insertAdmin(){

		$nama = $_POST['namaa'];
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$tgl = $_POST['birth'];
		$gender = $_POST['jender'];
		$adds = $_POST['alamat'];
		$eml = $_POST['mail'];
		$status = $_POST['stt'];

		$data =array('username' => $username ,
					 'password' => md5($pass),
					 'namaAdmin' => $nama,
					 'lahirAdmin' => $tgl,
					 'GenderAdmin' => $gender,
					 'alamatAdmin' => $adds,
					 'emailAdmin' => $eml,
					 'statusAdmin' => $status,);

		$res = $this->mymodel->MTAdmin('admin', $data);

		if($res >= 1){?>
			<body onload='swal({title: "SUCCESS!",
                        text: "Data Has Been Saved",
                        timer: 3000,
                        type: "success",
                        showConfirmButton: false });'> <?php
			$this->load->view('administrator',array('isi'=>1));
		}else{?>
			<body onload='swal({title: "FAILED!",
                        text: "Failed to save Data",
                        timer: 3000,
                        type: "error",
                        showConfirmButton: false });'>
			<?php $this->load->view('administrator', array('isi'=>0));
			}
	}

	public function deleteAdmin($id){
		$id = array('id' => $id );

		$res = $this->mymodel->hapusBerita('admin',$id);

		if ($res >= 1) {?>
			<body onload='swal({title: "SUCCESS!",
                        text: "Data Has Been deleted",
                        timer: 3000,
                        type: "success",
                        showConfirmButton: false });'> <?php
			$this->load->view('administrator',array('isi'=>2));
		}
	}

	public function updateAdmin($id){
		$res = $this->mymodel->tampilAdmin(" where id = '$id'");
		$data = array('id' => $res[0]['id'],
					'usrname' => $res[0]['username'],
					'pw' => $res[0]['password'],
					'nama' => $res[0]['namaAdmin'],
					'lahir' => $res[0]['lahirAdmin'],
					'Gender' => $res[0]['GenderAdmin'],
					'alamat' => $res[0]['alamatAdmin'],
					'email' => $res[0]['emailAdmin'],
					'stt' => $res[0]['statusAdmin'], );
		$this->load->view('Update_EditAdmin',$data);
	}

	public function do_updateAdmin(){
		$nama = $_POST['namaa'];
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$tgl = $_POST['birth'];
		$gender = $_POST['jender'];
		$adds = $_POST['alamat'];
		$eml = $_POST['mail'];
		$status = $_POST['stt'];
		$id = $_POST['idd'];

	$data =array('username' => $username ,
				 'password' => md5($pass),
				 'namaAdmin' => $nama,
				 'lahirAdmin' => $tgl,
				 'GenderAdmin' => $gender,
				 'alamatAdmin' => $adds,
				 'emailAdmin' => $eml,
				 'statusAdmin' => $status,);
		
		$id = array('id' => $id , );

		$res = $this->mymodel->updateberita('admin',$data,$id);

		if($res >= 1){?>
			<body onload='swal({title: "SUCCESS!",
                        text: "Data Has Been Update",
                        timer: 3000,
                        type: "success",
                        showConfirmButton: false });'> <?php
			$this->load->view('administrator',array('isi'=>2));
		}
	}

	//function untuk membuka berita
	public function bukaberita($idNews){
		$res = $this->mymodel->tampilBerita(" where idNews = '$idNews'");
		$res1 = $this->mymodel->tampilBerita();
		$res2 = $this->mymodel->tampilkomen();
		$data = array('id' => $res[0]['idNews'],
					'judul' => $res[0]['judulNews'],
					'isi' => $res[0]['isiNews'],
					'tipe' => $res[0]['typeNews'],
					'gambar' => $res[0]['gambarNews'],
					'tanggal' => $res[0]['tanggalNews'],
					'admin' => $res[0]['admin'],
					'aku'=>$res1,
					'kamu' => $res2 );
		$this->load->view('resultNews',$data);
	}

	//function untuk mencari data
	public function cariData(){
		$cari = $_POST['cari'];
		$beda['aku'] = $this->mymodel->caridata($cari);
		$this->load->view('resultSearch',$beda);
	}

	//untuk menampilkan berita yg sudah di pilih
	public function Result($idNews){
		$res = $this->mymodel->tampilBerita(" where idNews = '$idNews'");
		$data = array('id' => $res[0]['idNews'],
					'judul' => $res[0]['judulNews'],
					'isi' => $res[0]['isiNews'],
					'tipe' => $res[0]['typeNews'],
					'gambar' => $res[0]['gambarNews'],
					'tanggal' => $res[0]['tanggalNews'],
					'admin' => $res[0]['admin'] );
		$this->load->view('resultNews',$data);
	}

	//untuk menampilkan form login user
	public function loginUser(){
		$this->load->view('form_login_user');
	}

	//untuk menampilkan form daftar user
	public function viewUsrForm(){
		$this->load->view('addUser');
	}

	//untuk menambah user baru
	public function insertUser(){

		$nama = $_POST['namaa'];
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$tgl = $_POST['birth'];
		$gender = $_POST['jender'];
		$adds = $_POST['alamat'];
		$eml = $_POST['mail'];

		$data =array('namaUser' => $nama,
					 'usrUser' => $username ,
					 'passUser' => md5($pass),
					 'lahirUser' => $tgl,
					 'genderUser' => $gender,
					 'alamatUser' => $adds,
					 'emailUser' => $eml,);

		$res = $this->mymodel->MTAdmin('user', $data);

		if($res >= 1){?>
			<body onload='swal({title: "SUCCESS!",
                        text: "Data Has Been Saved",
                        timer: 3000,
                        type: "success",
                        showConfirmButton: false });'> <?php
			redirect(base_url("Welcome"),'refresh');
		}else{?>
			<body onload='swal({title: "FAILED!",
                        text: "Failed to save Data",
                        timer: 3000,
                        type: "error",
                        showConfirmButton: false });'>
			<?php $this->load->view('addUser', array('isi'=>0));
			}
	}

	//untuk menyimpan komen
	public function insertkomen(){

		$nama = $this->session->userdata('nama');;
		$judul = $_POST['cata'];
		$comment = $_POST['comment'];
		$nomor = $_POST['nom'];
		$today = date("j F Y");
		
		$data =array('name' => $nama ,
					 'judul' => $judul,
					 'comment' => $comment,
					 'tanggal' => $today,
					 );

		$res = $this->mymodel->saveKomen('comen', $data);

		if($res >= 1){?>
			<body onload='swal({title: "SUCCESS!",
                        text: "Data Has Been Saved",
                        timer: 3000,
                        type: "success",
                        showConfirmButton: false });'> <?php
			redirect(base_url("Welcome/bukaberita/$nomor"),'refresh');
		}else{?>
			<body onload='swal({title: "FAILED!",
                        text: "Failed to save Data",
                        timer: 3000,
                        type: "error",
                        showConfirmButton: false });'>
			<?php $this->load->view('administrator', array('isi'=>0));
			}
	}

	public function sql(){
		$this->load->view('sqlAngular');
	}

}
