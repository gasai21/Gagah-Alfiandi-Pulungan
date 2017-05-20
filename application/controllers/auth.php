<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$this->load->view('form_login');
	}

	public function login(){
		
			$username = $this->input->post('usernamee');
			$password = $this->input->post('passwordd');
			$hasil = $this->mymodel->loginok($username,$password);
			if($hasil==1){
				$data = array('status' => 'oke','nama'=>$username);
				$this->session->set_userdata($data);
				redirect(base_url("admin"));
				
			}else{
				$data['isi']=0;
				$this->load->view('form_login',$data);
				echo'<script>swal("Good job!", "You clicked the button!", "success");</script>';
				//redirect(base_url("auth"),'refresh');
				 }
				
	}

	public function loginusr(){
		
			$username = $this->input->post('usernamee');
			$password = $this->input->post('passwordd');
			$hasil = $this->mymodel->loginUsr($username,$password);
			if($hasil==1){
				$data = array('status' => 'userLogin','nama'=>$username);
				$this->session->set_userdata($data);
				redirect(base_url("welcome"));
				
			}else{
				$data['isi']=0;
				$this->load->view('form_login_user',$data);
				echo'<script>swal("Good job!", "You clicked the button!", "success");</script>';
				//redirect(base_url("auth"),'refresh');
				 }
				
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url("welcome"));
	}
}
