<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cvideo extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->view_data['base_url'] = base_url();
		$this->load->helper('url');
		$this->load->model('video');
	}

	public function tambah(){          
		        $id = "";
				$nama					= addslashes($this->input->post('nama'));
				$url					= addslashes($this->input->post('url'));
				$foto				= "";
			
                $data = array(
                'id_video'=>$id,
                'nama'   => $nama,
                'url'  => $url,
                'foto' => $foto,
                
                 );
                
                $this->video->get_insert($data);
    
    redirect('admin/dasboard');         
    }

    public function hapus($id){

		$this->video->get_hapus($id);    
    	redirect('admin/dasboard');         
    }

    public function modal($id){
    	$data['video'] = $this->video->video_byid($id);
		$this->load->view('form_update_video',$data);
    }

    public function update($id){

     	$nama					= addslashes($this->input->post('nama'));
		$url					= addslashes($this->input->post('url'));
	
        $data = array(
                'id_video'=>$id,
                'nama_video'   => $nama,
                'url_video'  => $url,

        );
         
                $this->video->get_update($id,$data);

		redirect('admin/dasboard'); 
    }
    
}