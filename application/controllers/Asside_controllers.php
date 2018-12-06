<?php
class Asside_controllers extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Asside_models');
	}

	function index(){
		$this->load->view('upload_view');
	}

	function uploads(){
        
        $config['upload_path']="./assets/images/Asside";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/images/Asside/'.$data['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '100%';
            
            $config['new_image']= './assets/images/Asside/'.$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

	        $title= $this->input->post('title');
	        $image= $data['file_name']; 
	        $this->load->model('Asside_models');
	        $result= $this->Asside_models->save_upload($title,$image);
	        echo json_decode($result);
        }
        else
            {
                echo $this->upload->display_errors();
            }

    }

    function asside_data(){
        $this->load->model('Asside_models');
		$data=$this->Asside_models->get_asside();
		echo json_encode($data);
    }

    function delete(){
        $this->load->model('Asside_models');
		$data=$this->Asside_models->delete_asside();
		echo json_encode($data);
    }

    function update(){
		$this->load->model('Asside_models');
		$data=$this->Asside_models->update_blog();
		echo json_encode($data);
	}
	
}