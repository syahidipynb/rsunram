<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spesialis_controllers extends CI_Controller {

	public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper');
    }

    function spesialis_data(){
        $this->load->model('spesialis_models');
		$data=$this->spesialis_models->get_spesialis();
		echo json_encode($data);
    }

    function spesialis_singledata(){
        $this->load->model('spesialis_models');
		$data=$this->spesialis_models->get_singlespesialis();
		echo json_encode($data);
    }

    function save(){
        $this->load->model('spesialis_models');
		$data=$this->spesialis_models->save_spesialis();
		echo json_encode($data);
    }

    function delete(){
        $this->load->model('spesialis_models');
		$data=$this->spesialis_models->delete_spesialis();
		echo json_encode($data);
    }

    function update(){
		$this->load->model('spesialis_models');
		$data=$this->spesialis_models->update_spesialis();
		echo json_encode($data);
	}
}
?>
