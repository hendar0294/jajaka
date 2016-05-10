<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cportofolio extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->view_data['base_url'] = base_url();
		$this->load->helper('url');
		$this->load->model('portofolio');
	}

	public function tambah(){          
		        $id = "";
				$nama					= addslashes($this->input->post('nama'));
				$url					= addslashes($this->input->post('url'));
				$foto				= "";
			
                $data = array(
                'id_portofolio'=>$id,
                'nama'   => $nama,
                'url'  => $url,
                'foto' => $foto,
                
                 );
                
                $this->portofolio->get_insert($data);
    
    redirect('admin/dasboard');         
    }

    public function hapus($id){

		$this->portofolio->get_hapus($id);    
    	redirect('admin/dasboard');         
    }

    public function modal($id){
    	$data['portofolio'] = $this->portofolio->portofolio_byid($id);
		$this->load->view('form_update_portofolio',$data);
    }

    public function update($id){

     	$nama					= addslashes($this->input->post('nama'));
		$url					= addslashes($this->input->post('url'));
		$foto				= "";
	
        $data = array(
                'id_portofolio'=>$id,
                'nama'   => $nama,
                'url'  => $url,
                'foto' => $foto,
        );
         
                $this->portofolio->get_update($id,$data);

		redirect('admin/dasboard'); 
    }
    
}