<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		if($this->session->userdata('status') != 'oke'){
			redirect(base_url("auth"));
		}
		$this->load->model('mymodel');
	}
	public function index()
	{
		$this->load->view('administrator');

	}

	public function AddNews(){
		$this->load->view('addNews',array('error' => ' ' ));
	}

	public function EditNews(){
		$res = $this->mymodel->tampilBerita();
		$this->load->view('editNews',array('data' => $res));
	}

	public function ViewNews(){
		$this->load->view('viewNews');
	}

	public function AddAdmin(){
		$this->load->view('addAdmin');
	}

	public function EditAdmin(){
		$res = $this->mymodel->tampilAdmin();
		$this->load->view('editAdmin', array('data' => $res));
	}
}
