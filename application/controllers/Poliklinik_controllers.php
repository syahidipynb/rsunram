<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliklinik_controllers extends CI_Controller {

    public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper'); 
    }

    function poliklnik_data(){
        $this->load->model('poliklinik_models');
        $data=$this->poliklinik_models->get_poliklinik();
		echo json_encode($data);
    }

    function delete(){
        $this->load->model('poliklinik_models');
		$data=$this->poliklinik_models->delete_poliklinik();
		echo json_encode($data);
    }

    function save(){
        $config['upload_path']="./assets/images/Poliklinik";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/images/Poliklinik/'.$data['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '100%';
            
            $config['new_image']= './assets/images/Poliklinik/'.$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $image= $data['file_name'];
            
            $this->load->model('poliklinik_models');
		    $data=$this->poliklinik_models->save_poliklinik($image);
		    echo json_encode($data);
        }
        else{
            $this->load->model('poliklinik_models');
		    $data=$this->poliklinik_models->save_poliklinik($image=null);
		    echo json_encode($data);
        }

        
    }

    function update(){
        $config['upload_path']="./assets/images/Poliklinik";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/images/Poliklinik/'.$data['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '100%';
            
            $config['new_image']= './assets/images/Poliklinik/'.$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $image= $data['file_name'];
        
            $this->load->model('poliklinik_models');
		    $data=$this->poliklinik_models->update_poliklinik($image);
		    echo json_encode($data);
        }
        else{
            $this->load->model('poliklinik_models');
            $data=$this->poliklinik_models->update_poliklinik($image=null);
            echo json_encode($data);
        }
		
    }
    
    

}
?>