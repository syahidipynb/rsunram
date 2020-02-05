<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_controllers extends CI_Controller {

	public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper');
    }

    function blog_data(){
        $this->load->model('Blog_models');
		$data=$this->Blog_models->get_blog();
		echo json_encode($data);
    }

    function spesialis_singledata(){
        $this->load->model('spesialis_models');
		$data=$this->spesialis_models->get_singlespesialis();
		echo json_encode($data);
    }

    function save(){
        $config['upload_path']="./assets/images/Blog";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/images/Blog/'.$data['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '100%';
            
            $config['new_image']= './assets/images/Blog/'.$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $image= $data['file_name']; 

            $this->load->model('Blog_models');
		    $data=$this->Blog_models->save_blog($image);
		    echo json_encode($data);
        }
        else{
            $this->load->model('Blog_models');
		    $data=$this->Blog_models->save_blog($image=null);
            echo json_encode($data);
        }
    }

    function delete(){
        $this->load->model('Blog_models');
		$data=$this->Blog_models->delete_blog();
		echo json_encode($data);
    }

    function update(){
        $config['upload_path']="./assets/images/Blog";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/images/Blog/'.$data['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '100%';
            
            $config['new_image']= './assets/images/Blog/'.$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $image= $data['file_name']; 

            $this->load->model('Blog_models');
		    $data=$this->Blog_models->update_blog($image);
		    echo json_encode($data);
        }
        else{
		$this->load->model('Blog_models');
		$data=$this->Blog_models->update_blogg();
        echo json_encode($data);
        }
	}
}
?>
