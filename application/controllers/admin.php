<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->view_data['base_url'] = base_url();
		$this->load->helper('url');
		$this->load->model('portofolio');
		$this->load->model('video');
		$this->load->model('admins');
		$this->load->model('login_model');
		$this->load->library('session');
	}

	public function index()
	{
		if (isset($_SESSION['username'])) {
			redirect('/admin/dasboard');
		}else{
			$this->login();
		}
		
	}

	public function login() {
		
		if (!isset($_SESSION['username'])) {
			$data = new stdClass();

			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == false) {

				$this->load->view('login');

			} else {

				$username = $this->input->post('username');
				$password = $this->input->post('password');

				if ($this->login_model->resolve_user_login($username, $password)) {


					if ($this->login_model->get_id_user($username) ) {
						if ($this->login_model->get_id_pass($password)) {

							$user_id = $this->login_model->get_id_pass($password);
							$user    = $this->login_model->get_user($user_id);

                     	    $_SESSION['user_id']      = (int)$user->id;
							$_SESSION['username']     = (string)$user->username;
								// $_SESSION['logged_in']    = (bool)true;
								// $_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
								// $_SESSION['is_admin']     = (bool)$user->is_admin;
							redirect('/admin/dasboard');

						}else{

							$data->error = 'Wrong username or password.';
							$this->load->view('login', $data);
						}	

					}
					else {

						$data->error = 'Wrong username or password.';
						$this->load->view('login', $data);

					}

				}

			}
		}else{
			redirect('/admin/dasboard');
		}
	}
	

	public function logout() {
		
		$this->session->sess_destroy();
		redirect('/admin');
		
	}


	public function dasboard(){
		if (isset($_SESSION['username'])) {

			$data['portofolio'] = $this->portofolio->get_all();
			$data['video'] = $this->video->get_all();
			$data['admin'] = $this->admins->get_all();
			$this->load->view('dasboard', $data);
		}else{
			redirect('/admin');
		}
		
	}

	public function add_admin(){          

		$user= addslashes($this->input->post('user'));
		$pass= addslashes($this->input->post('pass'));

		$this->login_model->create_user($user, $pass);

		redirect('admin/dasboard');         
	}


// admin

	public function hapus($id){

		$this->admins->get_hapus($id);    
		redirect('admin/dasboard');         
	}

	public function modal($id){
		$data['admin'] = $this->admins->admin_byid($id);
		$this->load->view('form_update_admin',$data);
	}

	public function update($id){

		$user= addslashes($this->input->post('user'));
		$pass= addslashes($this->input->post('pass'));


		$data = array(
			'id'=>$id,
			'username'   => $user,
			'password'  => $pass,

			);

		$this->admins->get_update($id,$data);

		redirect('admin/dasboard'); 
	}

}