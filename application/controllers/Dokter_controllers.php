<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_controllers extends CI_Controller {

    public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper'); 
    }

    function dokter(){
        $this->load->model('dokter_models');
		$data=$this->dokter_models->get_dokter();
		echo json_encode($data);
    }

    function single_dokter(){
        $this->load->model('dokter_models');
		$data=$this->dokter_models->get_single_dokterr();
		echo json_encode($data);
    }

    function dokter_singledata(){
        $this->load->model('dokter_models');
		$data=$this->dokter_models->get_datadokter();
		echo json_encode($data);
    }

    

    public function insert_dokter(){
        $config['upload_path']="./assets/images/Dokter";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/images/Dokter/'.$data['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '100%';
            //$config['width']= 600;
            //$config['height']= 400;
            $config['new_image']= './assets/images/Dokter/'.$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $image= $data['file_name'];

            $this->load->helper('url');
            $this->load->model('dokter_models');
            $data= $this->dokter_models->insert_dokter($image);
            echo json_encode($data);
        }
        else{
            $image="Profil.jpg";
            $this->load->helper('url');
            $this->load->model('dokter_models');
            $data= $this->dokter_models->insert_dokter($image);
            echo json_encode($data);
        }
        
    }

    function update(){
        $config['upload_path']="./assets/images/Dokter";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/images/Dokter/'.$data['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '100%';
            //$config['width']= 600;
            //$config['height']= 400;
            $config['new_image']= './assets/images/Dokter/'.$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $image= $data['file_name'];

            $this->load->helper('url');
            $this->load->model('dokter_models');
            $data= $this->dokter_models->update_dokter($image);
            echo json_encode($data);
        }
        else{
            $this->load->helper('url');
            $this->load->model('dokter_models');
		    $data=$this->dokter_models->update_dokter($image=null);
		    echo json_encode($data);
        }
		
	}

    function delete(){
        $this->load->model('dokter_models');
		$data=$this->dokter_models->delete_dokter();
		echo json_encode($data);
    }
}
?>