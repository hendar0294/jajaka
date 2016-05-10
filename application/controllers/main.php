<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->view_data['base_url'] = base_url();
		$this->load->helper('url'); 
		$this->load->model('portofolio');
		$this->load->model('video');
		$this->load->model('admins');

	}

	public function index()
	{	
		$data['video'] = $this->video->get_all();
		$this->load->view('index',$data);
	}

	public function portofolio()
	{
		$data['portofolio'] = $this->portofolio->get_all();
		$this->load->view('portofolio',$data);
	}

	public function team(){
		$this->load->view('team');
	}

	public function about(){
		$this->load->view('about');
	}
}