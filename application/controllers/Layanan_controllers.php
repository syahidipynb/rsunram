<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_controllers extends CI_Controller {

	public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper');
    }

    function layanan_data(){
        $this->load->model('Layanan_models');
		$data=$this->Layanan_models->get_layanan();
		echo json_encode($data);
    }   

    function save(){
        
        $config['upload_path']="./assets/images/Layanan";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/images/Layanan/'.$data['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '100%';
           
            $config['new_image']= './assets/images/Layanan/'.$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $judul= $this->input->post('judul');
            $keterangan= $this->input->post('keterangan');
            $image= $data['file_name']; 
            
	        $this->load->model('Layanan_models');
	        $result= $this->Layanan_models->save_layanan($judul, $keterangan, $image);
	        echo json_decode($result);
        }
        else
            {
                $judul= $this->input->post('judul');
                $keterangan= $this->input->post('keterangan');
                $image= " "; 
                
                $this->load->model('Layanan_models');
                $result= $this->Layanan_models->save_layanan($judul, $keterangan, $image);
                echo json_decode($result);
            }

    }

    
    function delete(){
        $this->load->model('Layanan_models');
		$data=$this->Layanan_models->delete_layanan();
		echo json_encode($data);
    }

    function update(){
        
        $config['upload_path']="./assets/images/Layanan";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/images/Layanan/'.$data['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '100%';
           
            $config['new_image']= './assets/images/Layanan/'.$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            
            $id= $this->input->post('id_edit');
            $judul= $this->input->post('judul_edit');
            $keterangan= $this->input->post('keterangan_edit');
            $image= $data['file_name']; 
            
	        $this->load->model('Layanan_models');
	        $result= $this->Layanan_models->update_layananIcon($id, $judul, $keterangan, $image);
	        echo json_decode($result);
        }

        else{
            $id= $this->input->post('id_edit');
            $judul= $this->input->post('judul_edit');
            $keterangan= $this->input->post('keterangan_edit');
                            
            $this->load->model('Layanan_models');
            $result= $this->Layanan_models->update_layanan($id, $judul, $keterangan);
            echo json_decode($result);
        }
    }

}
?>
