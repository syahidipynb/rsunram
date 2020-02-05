<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_controllers extends CI_Controller {

    public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper'); 
    }

    function jadwal_data(){
        $this->load->model('jadwal_models');
		$data=$this->jadwal_models->get_jadwal();
		echo json_encode($data);
    }

    function update(){
		$this->load->model('jadwal_models');
		$data=$this->jadwal_models->update_jadwal();
		echo json_encode($data);
    }
    
    function delete(){
        $this->load->model('jadwal_models');
		$data=$this->jadwal_models->delete_jadwal();
		echo json_encode($data);
    }

    function save(){
        $this->load->model('jadwal_models');
		$data=$this->jadwal_models->save_jadwal();
		echo json_encode($data);
    }
}
?>

